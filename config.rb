# Require any additional compass plugins here.

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "httpdocs/css"
sass_dir = "sass"
images_dir = "httpdocs/img"
http_stylesheets_path = "/css"
http_images_path = "/img"
http_generated_images_path = "/img"
sprite_load_path = "sass/sprites"

if environment == :development
    http_images_path = "../img"
    http_generated_images_path = "../img"
end

# Development
output_style = :expanded
# environment = :development

# Production
# output_style = :compressed
environment = :production

# -------------------------

# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed

# To enable relative paths to assets via compass helper functions. Uncomment:
# relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
# line_comments = false


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass
