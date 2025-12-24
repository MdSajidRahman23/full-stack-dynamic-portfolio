# Brainstorm Plan: Replace Profile Picture with Facebook Image

## Information Gathered
- **Current Implementation**: Both `resources/views/home/index.blade.php` and `resources/views/cv/index.blade.php` use the same Unsplash image URL
- **Current Image**: `https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop&crop=face&auto=format`
- **Target Facebook URL**: `https://web.facebook.com/photo/?fbid=122225321858116009&set=a.122095725656116009`
- **Project Structure**: Laravel project with public directory at `e:/sajidpro/public/`

## Current Image Locations Found
1. **Home Page**: `resources/views/home/index.blade.php` line 12 - Hero section profile image
2. **CV Page**: `resources/views/cv/index.blade.php` line 11 - Header section profile image

## Plan
### Step 1: Extract Facebook Image
- Use browser automation to access the Facebook URL
- Handle Facebook's dynamic content loading
- Extract the actual image URL from the Facebook page
- Download the image

### Step 2: Save Image Locally
- Create `public/images/` directory if it doesn't exist
- Save the downloaded image as `public/images/profile.jpg`
- Optimize image size for web performance

### Step 3: Update Home Page
- Replace the image source in `resources/views/home/index.blade.php`
- Change from Unsplash URL to `/images/profile.jpg`
- Maintain all existing attributes (alt, class, etc.)

### Step 4: Update CV Page
- Replace the image source in `resources/views/cv/index.blade.php`
- Change from Unsplash URL to `/images/profile.jpg`
- Maintain all existing attributes (alt, class, etc.)

### Step 5: Test Changes
- Launch the Laravel development server
- Test both home page and CV page
- Verify image displays correctly
- Check for any console errors

## Dependent Files to be Edited
- `resources/views/home/index.blade.php` - Update hero section profile image (line 12)
- `resources/views/cv/index.blade.php` - Update header section profile image (line 11)
- `public/images/profile.jpg` - New image file (to be created)

## Technical Approach
- Use browser automation to handle Facebook's dynamic content loading
- Extract actual image URL from Facebook page content
- Optimize image size for web use (maintain quality while reducing file size)
- Use relative paths (`/images/profile.jpg`) for better portability
- Ensure proper alt text and styling compatibility

## Followup Steps
1. Extract image from Facebook URL using browser automation
2. Save optimized image to public/images/ directory
3. Update both Blade template files with new image path
4. Test the changes in browser
5. Clean up any temporary files

## Expected Outcome
- Both home page and CV page will display the Facebook profile image instead of the Unsplash placeholder
- Images will load faster due to local hosting
- Better performance and reliability compared to external image URLs
- Consistent image across both pages
h