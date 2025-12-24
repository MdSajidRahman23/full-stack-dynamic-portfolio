# Tree Image Replacement Plan

## Current Situation
- Both home page and CV page use an Unsplash person photo: `https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop&crop=face&auto=format`
- Images are referenced in:
  - `resources/views/home/index.blade.php` (line 12)
  - `resources/views/cv/index.blade.php` (line 11)

## Plan
1. **Find Tree Image**: Use a random tree image from Unsplash
2. **Download Image**: Save tree image as `public/images/profile.jpg`
3. **Update Views**: Replace image URLs in both view files to use local path `/images/profile.jpg`
4. **Test**: Verify the changes work correctly

## Steps
1. Download tree image from Unsplash
2. Update `resources/views/home/index.blade.php`
3. Update `resources/views/cv/index.blade.php`
4. Test the changes

## Expected Result
- Profile pictures will show a tree image instead of person photo
- Images will be served locally for better performance
- All existing styling and attributes will be preserved
