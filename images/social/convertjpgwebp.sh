#!/bin/bash

# Check if cwebp is installed
if ! command -v cwebp &> /dev/null; then
  echo "Error: cwebp is not installed. Please install it using 'sudo dnf -y install libwebp-tools'"
  exit 1
fi

# Loop through all files in the current directory
for file in *.webp *.jpeg *.webp; do
  # Check if the file is a regular file (not a directory)
  if [[ -f "$file" ]]; then
    # Get the filename without extension
    filename="${file%.*}"

    # Convert the image to WebP with default quality 75
    cwebp -q 95 "$file" -o "${filename}.webp"

    echo "Converted '$file' to '${filename}.webp'"
  fi
done

echo "Finished converting images to WebP!"

