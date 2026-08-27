# Project Brief

What's actually being built, for who, and to what content plan. Read
this before building any page — `CLAUDE.md` covers how the repo is
structured, this covers what goes in it.

## Client

Jamie, a mobile personal trainer. Site map and page requirements were
confirmed with him directly (over WhatsApp). No designer or copywriter on
his side — final copy will come from him once pages have somewhere to
put it, so build with realistic placeholder content sized to the wireframe, using lorum ipsum.

Footer includes a "Site by Will the Web Developer" credit — keep this in
the footer partial.

## Styling steer (loose, not a full spec)

- Black background, white text — high contrast
- Accent colour: blue, for outlines/interactive elements
- No further spec beyond this — reasonable design judgement fills in the
  rest (exact shades, spacing, type)

## Site map

Home, About, Services, Blog, FAQ (nav-only, no preview section on Home),
Contact.

## Wireframe

`Positivity Mobility Home Wireframe.pdf` (in the project's file uploads)
is the source of truth for the Home page layout — blueprint-style, dashed
boxes = content placeholders with word-count guidance, solid = structural.

Home page section order: Nav → Hero → Services overview (3 cards) → About
teaser → Blog feed (1 featured/pinned + 2 recent) → Testimonials (3) →
Service area/coverage → Final CTA → Footer.

## Page-by-page requirements

**Home**

- Recent blog posts, pulled automatically
- Optional manual "featured/pinned" post to highlight something specific
  — needs to be a toggle, not just always-most-recent
- Short About teaser linking through to the full About page
- Socials linked (also in Contact page and footer)

**About**

- Bio, ethos ("body & mind"), qualifications

**Services**

- Needs pricing: packages if there are distinct service tiers, otherwise
  a general hourly rate
- Cross-reference the pricing model in FAQ too, so the two stay consistent

**Blog**

- Own page, template-driven feed of normal WordPress posts (block editor,
  no custom fields needed here)

**FAQ**

- Q&A list, nav-only — no preview/teaser section on Home

**Contact**

- Enquiry form
- Contact details, socials, service area / coverage map
- Contact details (phone, email, socials) should come from an editable
  field or options page, not hardcoded — see `CLAUDE.md`'s File/DB split
  section

## Cross-cutting requirements

- Responsive (tablet/mobile) — the wireframe/mockup itself is desktop-only,
  so this needs deliberate attention, not just "it'll reflow"

## Deliberately out of scope for now

Forms plugin, SEO plugin, backups, caching, SMTP for the enquiry form.
Don't add any of these speculatively while building pages — they're
tracked as later work, not forgotten.
