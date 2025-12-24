#!/usr/bin/env python3
"""
Extract Facebook image using browser automation (Selenium)
"""
import os
import time
from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from webdriver_manager.chrome import ChromeDriverManager
import requests

def extract_facebook_image_with_browser():
    """Extract the actual image URL from Facebook page using browser automation"""
    facebook_url = "https://web.facebook.com/photo/?fbid=122225321858116009&set=a.122095725656116009"
    
    # Setup Chrome options
    chrome_options = Options()
    chrome_options.add_argument("--headless")  # Run in background
    chrome_options.add_argument("--no-sandbox")
    chrome_options.add_argument("--disable-dev-shm-usage")
    chrome_options.add_argument("--disable-gpu")
    chrome_options.add_argument("--window-size=1920,1080")
    chrome_options.add_argument("--user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36")
    
    driver = None
    try:
        print("Setting up Chrome browser...")
        # Setup Chrome driver
        service = Service(ChromeDriverManager().install())
        driver = webdriver.Chrome(service=service, options=chrome_options)
        
        print(f"Navigating to Facebook URL: {facebook_url}")
        driver.get(facebook_url)
        
        # Wait for page to load and handle potential login prompts
        wait = WebDriverWait(driver, 20)
        
        print("Waiting for page to load...")
        time.sleep(5)  # Initial wait for dynamic content
        
        # Look for the image in various ways
        image_url = None
        
        # Method 1: Look for img tags with src containing Facebook CDN domains
        try:
            images = driver.find_elements(By.TAG_NAME, "img")
            for img in images:
                src = img.get_attribute("src")
                if src and any(domain in src for domain in ['scontent', 'fbcdn', 'facebook.com']):
                    print(f"Found image: {src}")
                    image_url = src
                    break
        except Exception as e:
            print(f"Error finding img tags: {e}")
        
        # Method 2: Look for background images in style attributes
        if not image_url:
            try:
                elements = driver.find_elements(By.CSS_SELECTOR, "[style*='background-image']")
                for element in elements:
                    style = element.get_attribute("style")
                    if style and "background-image" in style:
                        import re
                        match = re.search(r'background-image:\s*url\(["\']?([^"\')\s]+)["\']?\)', style)
                        if match:
                            image_url = match.group(1)
                            print(f"Found background image: {image_url}")
                            break
            except Exception as e:
                print(f"Error finding background images: {e}")
        
        # Method 3: Look in meta tags
        if not image_url:
            try:
                og_image = driver.find_element(By.CSS_SELECTOR, "meta[property='og:image']")
                if og_image:
                    image_url = og_image.get_attribute("content")
                    print(f"Found og:image: {image_url}")
            except Exception as e:
                print(f"Error finding og:image: {e}")
        
        # Method 4: Look for high-resolution image sources
        if not image_url:
            try:
                # Look for images with specific data attributes or in photo containers
                photo_elements = driver.find_elements(By.CSS_SELECTOR, "[data-visualcompletion='ignore-dynamic']")
                for element in photo_elements:
                    src = element.get_attribute("src")
                    if src and any(domain in src for domain in ['scontent', 'fbcdn']):
                        image_url = src
                        print(f"Found high-res image: {image_url}")
                        break
            except Exception as e:
                print(f"Error finding high-res images: {e}")
        
        return image_url
        
    except Exception as e:
        print(f"Error with browser automation: {e}")
        return None
        
    finally:
        if driver:
            driver.quit()
            print("Browser closed")

def download_image(image_url, output_path):
    """Download the image from URL"""
    try:
        headers = {
            'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36'
        }
        
        print(f"Downloading image to {output_path}...")
        response = requests.get(image_url, headers=headers, timeout=30)
        response.raise_for_status()
        
        # Ensure directory exists
        os.makedirs(os.path.dirname(output_path), exist_ok=True)
        
        with open(output_path, 'wb') as f:
            f.write(response.content)
        
        print(f"Image saved successfully to {output_path}")
        
        # Check file size
        file_size = os.path.getsize(output_path)
        print(f"File size: {file_size / 1024:.2f} KB")
        
        return True
        
    except Exception as e:
        print(f"Error downloading image: {e}")
        return False

if __name__ == "__main__":
    print("🚀 Starting Facebook image extraction...")
    
    # Extract image URL using browser automation
    image_url = extract_facebook_image_with_browser()
    
    if image_url:
        print(f"✅ Successfully extracted image URL: {image_url}")
        
        # Download the image
        output_path = "public/images/profile.jpg"
        if download_image(image_url, output_path):
            print("🎉 Successfully extracted and downloaded Facebook image!")
            print(f"Image saved to: {output_path}")
        else:
            print("❌ Failed to download image")
    else:
        print("❌ Failed to extract image URL from Facebook page")
        print("This might be due to:")
        print("- Facebook requiring login")
        print("- Dynamic content loading issues")
        print("- Anti-scraping measures")
        print("\n💡 Alternative: You could manually download the image from the Facebook URL")
        print(f"Facebook URL: https://web.facebook.com/photo/?fbid=122225321858116009&set=a.122095725656116009")
