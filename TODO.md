# TODO: Replace Profile Picture with Facebook Image

## Current Situation
- The website currently uses an Unsplash placeholder image for the profile picture
- Located in: `resources/views/home/index.blade.php` and `resources/views/cv/index.blade.php`
- Current image URL: `https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop&crop=face&auto=format`

## Target Image
- Facebook URL: `https://web.facebook.com/photo/?fbid=122225321858116009&set=a.122095725656116009`
- This is a Facebook page URL, not a direct image URL

## Action Plan
1. **Download the Facebook image** - Extract the actual image from the Facebook URL
2. **Save image to project** - Store the downloaded image in an appropriate location
3. **Update home page** - Replace profile picture in `resources/views/home/index.blade.php`
4. **Update CV page** - Replace profile picture in `resources/views/cv/index.blade.php`
5. **Test the changes** - Verify the images display correctly

## Technical Considerations
- Facebook URLs require special handling to extract actual image data
- Need to ensure proper file permissions and storage location
- May need to optimize image size for web use

## Files to be Modified
- `resources/views/home/index.blade.php`
- `resources/views/cv/index.blade.php`
- New image file (location TBD)
