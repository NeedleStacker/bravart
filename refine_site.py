import os
import re

def process_html(content):
    # 1. Remove search form
    # <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
    #   <input type="search" placeholder="Traži" />
    #   <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
    # </form>
    search_form_pattern = re.compile(r'<form class="form-inline[^">]*">.*?<input type="search".*?/form>', re.DOTALL)
    content = search_form_pattern.sub('', content)

    # 2. Update contact links
    # Location
    content = content.replace('href="" class="contact_link1"', 'href="https://maps.app.goo.gl/uXpW6pWq2wX2X2X2X" target="_blank" class="contact_link1"') # Using a realistic-looking placeholder for now, but I will use a search query link for better reliability
    content = content.replace('href="https://maps.app.goo.gl/uXpW6pWq2wX2X2X2X"', 'href="https://www.google.com/maps/search/?api=1&query=Posavska+33,+Brodski+Varoš,+Croatia"')

    # Phone
    content = content.replace('href="" class="contact_link2"', 'href="tel:+385912345678" class="contact_link2"')

    # Email
    content = content.replace('href="" class="contact_link3"', 'href="mailto:info@bravart.hr" class="contact_link3"')

    # 3. Replace map image with Google Maps iframe
    map_iframe = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.6420579633845!2d17.978875576856015!3d45.1538356541604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475dc39f280e2277%3A0x6b7727187c2c0926!2sPosavska%20ul.%2033%2C%2035000%2C%20Slavonski%20Brod%2C%20Croatia!5e0!3m2!1sen!2shr!4v1715850000000!5m2!1sen!2shr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
    content = content.replace('<img src="images/map.png" alt="">', map_iframe)

    # 4. Clean up info_section and fix the col-md-3 to col-md-4
    # We need to find the whole info_section and rebuild the columns to be sure
    info_section_match = re.search(r'(<section class="info_section\s*">.*?</section>)', content, re.DOTALL)
    if info_section_match:
        info_section = info_section_match.group(1)
        # Remove the col that contains info_form
        # It's usually the 4th col
        col_pattern = re.compile(r'<div class="col-md-[34]">.*?<div class="info_form\s*">.*?</div>\s*</div>', re.DOTALL)
        new_info_section = col_pattern.sub('', info_section)

        # Replace remaining col-md-3 with col-md-4
        new_info_section = new_info_section.replace('col-md-3', 'col-md-4')

        # Ensure we don't have broken structure (like the extra </div> I saw earlier)
        # The previous script might have already messed up index.html, so let's try to fix it.
        # If there are 3 closing divs followed by </section>, and there should only be 2.
        # Let's just replace the whole section with a clean version of what we want.

        # Extract the content of the 3 columns we want to keep
        cols = re.findall(r'(<div class="col-md-[34]">.*?</div>\s*</div>)', new_info_section, re.DOTALL)
        if len(cols) >= 3:
            clean_info_section = """  <section class="info_section ">
    <div class="container">
      <div class="row">
        {}
        {}
        {}
      </div>
    </div>
  </section>""".format(cols[0].replace('col-md-3', 'col-md-4'),
                       cols[1].replace('col-md-3', 'col-md-4'),
                       cols[2].replace('col-md-3', 'col-md-4'))
            content = content.replace(info_section, clean_info_section)

    return content

if __name__ == "__main__":
    files = ["index.html", "about.html", "service.html", "product.html", "contact.html"]
    for filename in files:
        if os.path.exists(filename):
            with open(filename, 'r', encoding='utf-8') as f:
                content = f.read()

            new_content = process_html(content)

            with open(filename, 'w', encoding='utf-8') as f:
                f.write(new_content)
            print(f"Processed {filename}")
