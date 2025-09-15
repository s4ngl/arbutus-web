# Arbutus Yearbook Website Redesign Prompt

**Goal:** Recreate the Arbutus Yearbook site with the given file structure, using TailwindCSS and PHP partials. Include **all original text and content**, exactly as found on the current site, organized into the new files. Use Indiana University’s official color scheme: *IU Crimson (#990000)* for the main accent, a light beige (*IU Cream #EEEDEB*) for the secondary accent, plus white and an iu-black (e.g. #111111) for text/background variables [oai_citation:0‡teamcolorcodes.com](https://teamcolorcodes.com/indiana-hoosiers-color-codes/#:~:text=Crimson%20PANTONE%3A%20PMS%20201%20Hex,153%2C%200%2C%200) [oai_citation:1‡teamcolorcodes.com](https://teamcolorcodes.com/indiana-hoosiers-color-codes/#:~:text=Cream%20Hex%20Color%3A%20,0%2C0%2C0%2C0). Define these colors in `css/globals.css` as CSS variables.

## File Structure
- `index.php` – Homepage (includes header, navbar, main content, footer, scripts).
- `about.php` – “About Us” page content.
- `contact.php` – Contact information page (create a contact page with scraped contact details).
- `css/globals.css` – Global CSS with color variables and Tailwind imports.
- `favicon.ico` – Site favicon.
- `fonts/` – (If needed) any custom web fonts or icon fonts.
- `images/` – All images from the original site (yearbook cover, portrait images, logos, etc.).
- `js/script.js` – Custom JavaScript (hamburger menu toggle).
- `partials/` – Reusable PHP components:
  - `header.php` – HTML `<head>` (meta tags, title, CSS links).
  - `navbar.php` – Navigation bar.
  - `footer.php` – Footer with contact info and social icons.
  - `scripts.php` – End-of-page scripts (Tailwind JS config, custom `script.js`).

## index.php
- Use PHP includes: `<?php include('partials/header.php'); ?>`, `navbar.php`, `footer.php`, `scripts.php`.
- **Hero Section:** Full-width banner with the 2018 yearbook cover image (`images/yearbook-cover-2018.jpg`) [oai_citation:2‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=Image%3A%202018%20Yearbook%20Cover%20Order,Portraits%20%20%20Image%3A%20Portraits). Overlay text: **“Order your Arbutus yearbook for only $75”** [oai_citation:3‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=Image%3A%202018%20Yearbook%20Cover%20Order,Portraits%20%20%20Image%3A%20Portraits) and the subtext *“Take a peek at photos and stories you will see in the yearbook.”* [oai_citation:4‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=Take%20a%20peek%20at%20photos,will%20see%20in%20the%20yearbook). Use Tailwind utility classes (e.g. `text-4xl font-bold text-iu-cream` on IU red background).
- **Join Our Staff Section:** A section with heading *“Join our staff”* and text *“Get experience working on an award-winning student publication. Writers, photographers and copy editors needed year-round.”* [oai_citation:5‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=Get%20experience%20working%20on%20an,round). Also include a photo or graphic (e.g. use one of the portraits images or a placeholder).
- **Current Editor Highlight:** Show *Natalie Fitzgibbons* (with alt text *“editor-in-chief”*) and label her as “editor-in-chief” [oai_citation:6‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=Natalie%20Fitzgibbons), along with the tagline *“With a focus on history, the Arbutus staff has a rich tradition of storytelling.”* [oai_citation:7‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=Natalie%20Fitzgibbons).
- **Archive Teaser:** Section with a link or graphic for *Yearbook Archive* (“Travel back in time with a visit to our yearbook archive.” [oai_citation:8‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=Travel%20back%20in%20time%20with,visit%20to%20our%20yearbook%20archive)). Use the archive image (`images/yearbook-archive.jpg`) and link to either an archive page or the ISSUU site.
- **News / Caption:** Display the line *“A face mask covers the face of the Herman B Wells statue April 20, 2020 on IU’s campus.”* [oai_citation:9‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=A%20face%20mask%20covers%20the,20%2C%202020%20on%20IU%E2%80%99s%20campus) as a caption under an image (use `images/herman-mask.jpg` as placeholder).
- **CTA Buttons:** Prominently place calls to action (buttons styled with IU red) for “Order a Book”, “Portraits”, “Sneak Peek”, etc. Use the same text as nav items. Example: a button linking to order page with text **“Order your 2026 IU yearbook today!”** [oai_citation:10‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=Order%20a%20yearbook).
- **General Info Section:** Below that, include the Q&A style items:
  - **“Portraits”** heading and text *“Watch this space for 2026 Arbutus portrait information.”* [oai_citation:11‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=Portraits).
  - **“Order a yearbook”** heading with the link text *“Order your 2026 IU yearbook today!”* (link to `order.php`) [oai_citation:12‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=Order%20a%20yearbook).
  - **“When will I get my yearbook?”** heading with answer *“2026 yearbooks are scheduled to be shipped beginning late June 2026.”* [oai_citation:13‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=Order%20a%20yearbook).
- **Footer:** Include contact info and branding identical to the original footer: *“The Arbutus yearbook is a student-run publication under the umbrella of Indiana University Student Media.”* [oai_citation:14‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=The%20Arbutus%20yearbook%20is%20a,of%20Indiana%20University%20Student%20Media), the ©2025 notice [oai_citation:15‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=Copyright%20%C2%A9%202025%20Arbutus%20yearbook,of%20use%20and%20privacy%20policy), a *“Terms of use and privacy policy”* link (point to `privacy.php` or external), IU Student Media address and email [oai_citation:16‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=IU%20Student%20Media%20ARBUTUS%20YEARBOOK,Bloomington%2C%20IN%2047405), and the “Powered by Solutions by The State News” logo/text [oai_citation:17‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=www). Include the flower and text logos (`images/arbutus-flower-logo.svg`, `images/arbutus-text-logo.svg`) [oai_citation:18‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=Image%3A%20Arbutus%20Flower%20Logo%20Image%3A,Arbutus%20Text%20Logo) and social icons (`images/facebook-logo.svg`, `images/twitter-logo.svg`) [oai_citation:19‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=Image%3A%20Facebook%20Logo%20Image%3A%20Twitter,Logo).

## order.php (Order A Book)
- Copy the navigation and header/footer partials as in `index.php`.
- Title or heading: *“Order”* (or “Order a Yearbook”).
- Body content from [3]:
  - **Intro paragraph:** *“A yearbook is a great way to take college life with you when you graduate. You'll be able to enjoy the award-winning coverage of student life, sports, clubs and more.”* [oai_citation:20‡iuyearbook.com](https://www.iuyearbook.com/page/order#:~:text=Order%20information%20for%20the%202026,IU%20yearbook).
  - **IU students section:** *“IU students: Reserve your copy today for only $75 and charge it to your bursar account. (Log in with your IU username to order.)”* [oai_citation:21‡iuyearbook.com](https://www.iuyearbook.com/page/order#:~:text=IU%20students%3A%20Reserve%20your%20copy,your%20IU%20username%20to%20order).
  - **Order link (students):** Button/link text *“Click to order your 2026 Arbutus yearbook”* pointing to the IDS News order form (IDsNews Fireform) [oai_citation:22‡iuyearbook.com](https://www.iuyearbook.com/page/order#:~:text=Click%20to%20order%20your%202026,Arbutus%20yearbook).
  - **Non-students section:** *“Parents, friends or businesses: Not an IU student? Everyone can enjoy an IU yearbook for the same student price of $75. Reserve yours today.”* [oai_citation:23‡iuyearbook.com](https://www.iuyearbook.com/page/order#:~:text=Parents%2C%20friends%20or%20businesses%3A%20Not,Reserve%20yours%20today).
  - **Order link (public):** Button/link text *“Click to order your 2026 Arbutus yearbook”* pointing to the Yearbook Order Center (use order number 2432) [oai_citation:24‡iuyearbook.com](https://www.iuyearbook.com/page/order#:~:text=Click%20to%20order%20your%202026,Arbutus%20yearbook).
  - **Delivery info:** *“Delivery: 2026 yearbooks are scheduled to be shipped beginning May 2026. If you chose the delivery option, your yearbook will be delivered to the address you provided when you placed your order. Yearbooks for pickup will be available on campus in June.”* [oai_citation:25‡iuyearbook.com](https://www.iuyearbook.com/page/order#:~:text=Delivery%3A%202026%20yearbooks%20are%20scheduled,available%20on%20campus%20in%20June).
  - **Contact for help:** *“Questions about your order? Contact us here.”* (link to email).
- After main content, repeat the CTA blocks (“Portraits”, “Order a yearbook”, “When will I get my yearbook?”) same as on homepage [oai_citation:26‡iuyearbook.com](https://www.iuyearbook.com/page/order#:~:text=Portraits).
- Use Tailwind to style the page cleanly, ensuring forms or links look like buttons.

## portraits.php (Portraits)
- Include header, navbar, footer partials.
- Heading: *“Portraits”*.
- Content from [4]: *“Arbutus 2026 portrait sessions will begin in August. Watch this space for scheduling information.”* [oai_citation:27‡iuyearbook.com](https://www.iuyearbook.com/page/portraits#:~:text=Arbutus%202026%20portrait%20sessions%20will,this%20space%20for%20scheduling%20information).
- Subtext or note: *“For any questions, email info@laurenstudios.com or call 951-272-8600.”* [oai_citation:28‡iuyearbook.com](https://www.iuyearbook.com/page/portraits#:~:text=scheduling%20information) (with mailto link on the email).
- Then repeat the footer CTA blocks (“Watch this space for 2026 Arbutus portrait information”, etc.) as on home page [oai_citation:29‡iuyearbook.com](https://www.iuyearbook.com/page/portraits#:~:text=Portraits).

## sneakpeek.php (Sneak Peek)
- Include header, navbar, footer.
- Heading: *“Sneak Peek”* (or “2026 Sneak Peek”).
- The original site has no content here except a placeholder, so keep it minimal. For example: *“Stay tuned for upcoming sneak peeks of the 2026 Arbutus yearbook!”* (or a similar placeholder).
- After that, include the same CTA blocks as other pages (“Portraits”, etc.) [oai_citation:30‡iuyearbook.com](https://www.iuyearbook.com/page/peek#:~:text=Portraits).

## get-involved.php (Get Involved)
- Include header, navbar, footer.
- Heading: *“Get Involved”*.
- Content from [6]: *“The Arbutus yearbook is back! Want to be part of an award-winning yearbook staff? Apply [here](https://www.idsnews.com).”* [oai_citation:31‡iuyearbook.com](https://www.iuyearbook.com/page/get-involved#:~:text=The%20Arbutus%20yearbook%20is%20back%21,winning%20yearbook%20staff%3F%20Apply%20here) (use the exact link text).
- Then repeat CTA blocks (“Portraits”, “Order a yearbook”, etc.) [oai_citation:32‡iuyearbook.com](https://www.iuyearbook.com/page/get-involved#:~:text=Portraits).

## staff.php (Staff)
- Include header, navbar, footer.
- Heading: *“Staff”*.
- List the staff from [7]:
  - **Natalie Fitzgibbons** – *2025 Editor-in-chief* (email: *arbutuseditor@idsnews.com*) [oai_citation:33‡iuyearbook.com](https://www.iuyearbook.com/page/staff#:~:text=Natalie%20Fitzgibbons).
  - (If more staff names existed, list them similarly. The site only lists Natalie).
- Use Tailwind styling for a simple staff list (e.g. card or list layout).
- Then CTA blocks (portrait/order info) [oai_citation:34‡iuyearbook.com](https://www.iuyearbook.com/page/staff#:~:text=Portraits).

## about.php (About Us)
- Include header, navbar, footer.
- Heading: *“About Us”*.
- Section “Our namesake”: copy the paragraphs from [8]:
  - *“In the early 1890s with no automobiles for cruising, IU students spent spring afternoons in a wooded area about four miles east of Bloomington called Arbutus Hill. They sunned themselves while surrounded by the spicy fragrance of the arbutus, a delicate pink ground flower.”* [oai_citation:35‡iuyearbook.com](https://www.iuyearbook.com/page/about#:~:text=In%20the%20early%201890s%20with,a%20delicate%20pink%20ground%20flower).
  - *“Discovered there in 1877 by Professor Boisen, it was thought to be a previously undocumented rarity and became a coveted treasure of the University community.”* [oai_citation:36‡iuyearbook.com](https://www.iuyearbook.com/page/about#:~:text=Discovered%20there%20in%201877%20by,treasure%20of%20the%20University%20community).
  - *“Even after people realized it was the New England mayflower, Boisen’s name stuck. Students and faculty so fondly associated the arbutus with Indiana that the flower became the namesake of our first yearbook in 1894.”* [oai_citation:37‡iuyearbook.com](https://www.iuyearbook.com/page/about#:~:text=Even%20after%20people%20realized%20it,our%20first%20yearbook%20in%201894).
  - *“The arbutus has inspired several Hoosier poets and, for a while, annual bouquets were picked for former IU President Herman B Wells. Arbutus Hill, named after the flower, remains today a protective haven for the trailing wild flower.”* [oai_citation:38‡iuyearbook.com](https://www.iuyearbook.com/page/about#:~:text=The%20arbutus%20has%20inspired%20several,for%20the%20trailing%20wild%20flower).
- Add “Find us on social media”: *“Like us on Facebook, follow us on Twitter and Instagram for exclusive content, updates on portrait sessions and more.”* [oai_citation:39‡iuyearbook.com](https://www.iuyearbook.com/page/about#:~:text=Find%20us%20on%20social%20media), with links to the actual social pages.
- Use Tailwind to ensure the text is well-formatted (e.g. `prose` classes for paragraphs).

## archive.php (Archive)
- Include header, navbar, footer.
- Heading: *“Yearbook Archive”*.
- Rather than scraping the entire ISSUU content (which is external), you can include a link or embed. For example: *“View our archived yearbooks online:”* with a list of yearbook titles linking to their ISSUU pages. If needed, scrape a few recent years as example. (Citing [9] is impractical for all, but ensure the link to the ISSUU profile is present).
- Alternatively, embed an ISSUU viewer if possible, or simply provide “Click here to browse old yearbooks” linking to the Issuu profile [oai_citation:40‡issuu.com](https://issuu.com/arbutusyearbook#:~:text=2001%20Arbutus%20Yearbook).

## advertise.php (Advertise)
- Include header, navbar, footer.
- Heading: *“Advertise”*.
- Content from [14]: *“TO ADVERTISE, CALL 812-727-3202 Ext. 108”* [oai_citation:41‡iuyearbook.com](https://www.iuyearbook.com/page/advertise#:~:text=Advertise).
- Provide this number prominently (perhaps as a clickable `tel:` link).
- Then CTA blocks (portraits/order info) [oai_citation:42‡iuyearbook.com](https://www.iuyearbook.com/page/advertise#:~:text=Portraits).

## contact.php (Contact)
- Include header, navbar, footer.
- Heading: *“Contact Us”*.
- Content (scraped from site footer/contact info):
  - Address and email: *“IU Student Media ARBUTUS YEARBOOK, 601 E. Kirkwood Ave., Bloomington, IN 47405”* [oai_citation:43‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=IU%20Student%20Media%20ARBUTUS%20YEARBOOK,Bloomington%2C%20IN%2047405), *“Phone: 812-855-9737, Email: arbutus@iu.edu”* [oai_citation:44‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=812).
  - Advertising Dept: *“Advertising Department – Phone: 812-855-0763, Fax: 812-855-8009, Franklin Hall, Rm 129, 601 E. Kirkwood Ave., Bloomington, IN 47405, Email: advertise@idsnews.com”* [oai_citation:45‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=Advertising%20Department%20Phone%3A%20812,com).
  - Editor: *“Natalie Fitzgibbons, 2025 Editor-in-chief (Email: arbutuseditor@idsnews.com)”* [oai_citation:46‡iuyearbook.com](https://www.iuyearbook.com/page/staff#:~:text=Natalie%20Fitzgibbons).
  - Social media: *“Follow us on Facebook, Twitter, and Instagram.”* (same wording as [8] if desired) [oai_citation:47‡iuyearbook.com](https://www.iuyearbook.com/page/about#:~:text=Find%20us%20on%20social%20media).
- You may include a simple contact form (name, email, message) styled with Tailwind, but ensure scraped text above is present verbatim.

## partials/header.php
- HTML `<head>` section:
  - Include `<meta charset="UTF-8">`, viewport meta, and a `<title>` like *“Arbutus Yearbook – [PageName]”*.
  - Link CSS: `<link rel="stylesheet" href="css/globals.css">` (after building Tailwind’s output into it or linking the Tailwind CDN).
  - Define root CSS variables in `globals.css`:
    ```
    :root {
      --iu-red: #990000;     /* IU Crimson */
      --iu-cream: #EEEDEB;   /* IU Cream beige */
      --iu-white: #F5F5F5;  /* light background */
      --iu-black: #111111;  /* text color */
    }
    ```
- Ensure `<link>` to Tailwind’s generated CSS (if using PostCSS/build) is included.
- Include any site-wide meta or scripts (e.g. Google Analytics placeholder).

## partials/navbar.php
- Create a responsive navigation bar using Tailwind:
  - The nav brand/logo at left (use the Arbutus text logo linking to `index.php`).
  - Navigation links (use the scraped navbar items [oai_citation:48‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=,8), e.g. “Order a Book”, “Portraits”, “Sneak Peek”, “Get Involved”, “Staff”, “About Us”, “Archive”, “Advertise”, and optionally “Contact”). Link to the corresponding pages (`order.php`, `portraits.php`, etc.).
  - On mobile: collapse links into a hamburger menu. Use a button (`<button>`) with an icon (e.g. a simple `<div class="hamburger">` or SVG) that toggles a hidden menu.
  - Write minimal JavaScript in `js/script.js` to toggle the mobile menu’s visibility (e.g. add/remove Tailwind’s `hidden` class on click).
  - Ensure navigation is sticky or at least prominent and that the mobile version shows a menu icon. Use Tailwind classes like `flex`, `md:hidden`, etc.

## partials/footer.php
- Footer content (as seen on every page):
  - The copy from [2]: *“The Arbutus yearbook is a student-run publication under the umbrella of Indiana University Student Media.”* [oai_citation:49‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=The%20Arbutus%20yearbook%20is%20a,of%20Indiana%20University%20Student%20Media).
  - *“Copyright © 2025 Arbutus yearbook.”* [oai_citation:50‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=Copyright%20%C2%A9%202025%20Arbutus%20yearbook,of%20use%20and%20privacy%20policy) and a *“Terms of use and privacy policy”* link (point to `privacy.php`).
  - IU Student Media address and contact info [oai_citation:51‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=IU%20Student%20Media%20ARBUTUS%20YEARBOOK,Bloomington%2C%20IN%2047405) (same as in contact.php).
  - Social media icons (Facebook, Twitter) linking to the Arbutus accounts [oai_citation:52‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=Image%3A%20Facebook%20Logo%20Image%3A%20Twitter,Logo).
  - Logos: Arbutus flower and text (images from `images/`).
  - “Powered by The State News” with their logo (include `images/state-news-logo.svg`) [oai_citation:53‡iuyearbook.com](https://www.iuyearbook.com/#:~:text=www).
- Style the footer with Tailwind to have a light background (using `--iu-white`) and legible text (using `--iu-black`).

## partials/scripts.php
- Include necessary scripts before the closing `</body>`:
  - `<script src="js/script.js"></script>` for the mobile menu toggle.
  - If using Tailwind via CDN (not recommended for production but for simplicity, you may include `<script src="https://cdn.tailwindcss.com"></script>` and configure it there).
  - Any other JS initializations.

## css/globals.css
- Import Tailwind base, components, utilities (if using `@tailwind` directives).
- Define the color variables as above in `:root`.
- Optionally, add custom CSS if needed (e.g. styling for header/footer).
- Ensure this file is built with Tailwind (via CLI or CDN) so utility classes work.

## js/script.js
- Vanilla JS to toggle mobile nav:
  ```js
  const btn = document.getElementById('nav-toggle');
  const menu = document.getElementById('nav-menu');
  btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
