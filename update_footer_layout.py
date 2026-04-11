import os
import re

def update_info_section(content):
    # 1. Remove the col-md-3 containing info_form
    # Look for the col-md-3 that has info_form inside it
    pattern = re.compile(r'<div class="col-md-3">\s*<div class="info_form\s*">.*?</div>\s*</div>', re.DOTALL)
    content = pattern.sub('', content)

    # 2. Change remaining col-md-3 to col-md-4 in the info_section
    # We want to target ONLY the col-md-3 inside info_section
    # First, find the info_section
    info_section_pattern = re.compile(r'(<section class="info_section\s*">)(.*?)(</section>)', re.DOTALL)

    def replace_cols(match):
        header = match.group(1)
        body = match.group(2)
        footer = match.group(3)
        # Replace col-md-3 with col-md-4 inside the body
        new_body = body.replace('col-md-3', 'col-md-4')
        return header + new_body + footer

    content = info_section_pattern.sub(replace_cols, content)

    return content

if __name__ == "__main__":
    files = ["index.html", "about.html", "service.html", "product.html", "contact.html"]
    for filename in files:
        if os.path.exists(filename):
            with open(filename, 'r', encoding='utf-8') as f:
                content = f.read()

            new_content = update_info_section(content)

            with open(filename, 'w', encoding='utf-8') as f:
                f.write(new_content)
            print(f"Updated {filename}")
