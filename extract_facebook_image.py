#!/usr/bin/env python3
"""
Extract Facebook image from the provided URL
"""
import requests
from bs4 import BeautifulSoup
import re
import os

def extract_facebook_image():
    """Extract the actual image URL from Facebook page"""
    facebook_url = "https://web.facebook.com/photo/?fbid=122225321858116009&set=a.122095725656116009"
    
    try:
        # Set user agent to mimic a browser
        headers = {
            'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36'
        }
        
        print("Fetching Facebook page...")
        response = requests.get(facebook_url, headers=headers, timeout=30)
        response.raise_for_status()
        
        print("Parsing HTML...")
        soup = BeautifulSoup(response.content, 'html.parser')
        
        # Look for image elements
        images = soup.find_all('img')
        
        # Try to find the profile image
        profile_image_url = None
        
        # Method 1: Look for images with specific attributes
        for img in images:
            src = img.get('src', '')
            if 'scontent' in src or 'fbcdn' in src:
                profile_image_url = src
                break
        
        # Method 2: Look for images in meta tags
        if not profile_image_url:
            og_image = soup.find('meta', property='og:image')
            if og_image:
                profile_image_url = og_image.get('content')
        
        # Method 3: Look for images in link tags
        if not profile_image_url:
            link_image = soup.find('link', rel='image_src')
            if link_image:
                profile_image_url = link_image.get('href')
        
        if profile_image_url:
            print(f"Found image URL: {profile_image_url}")
            return profile_image_url
        else:
            print("No suitable image found in the page")
            return None
            
    except Exception as e:
        print(f"Error extracting image: {e}")
        return None

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
        return True
        
    except Exception as e:
        print(f"Error downloading image: {e}")
        return False

if __name__ == "__main__":
    # Extract image URL from Facebook
    image_url = extract_facebook_image()
    
    if image_url:
        # Download the image
        output_path = "public/images/profile.jpg"
        if download_image(image_url, output_path):
            print("✅ Successfully extracted and downloaded Facebook image!")
        else:
            print("❌ Failed to download image")
    else:
        print("❌ Failed to extract image URL")
