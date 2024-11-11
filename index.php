<!-- index.html -->
<?php
// Check if the domain is tresmenosdos.uno
if ($_SERVER['HTTP_HOST'] === 'tresmenosdos.uno') {
    // Redirect to the blog page on elazarpimentel.com
    header("Location: https://elazarpimentel.com/tresmenosdosuno");
    exit(); // Ensure that no further code is executed after redirection
} else {
    // Stay on the index.html page of elazarpimentel.com
    // Optionally, you can add code here to display the index.html content
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
        <title>Elazar Pimentel | Tech Consultant, Web and Software Developer, Project and Product Manager</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <meta name="robots" content="index, follow">
        <meta name="keywords"
                content="Elazar Pimentel, Full Stack Developer, Project Manager, Tech Consultant, Product Manager, Technology Consultant, Software Development, IT consultant, Buenos Aires, Argentina">
        <meta name="description"
                content="Elazar Pimentel - Technology Consulting. Expert in Technology, Project Management & Software Development in Buenos Aires, Argentina">
        <meta name="author" content="Elazar Pimentel">
        <link rel="canonical" href="https://www.elazarpimentel.com">
        <link rel="icon" href="favicon.png">
        <link rel="stylesheet" href="assets/css/main.css">

        <!-- Open Graph / Facebook -->
        <meta property="og:title"
                content="Elazar Pimentel | Tech Consultant, Web and Software Developer, Project and Product Manager">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.elazarpimentel.com">
        <meta property="og:image" content="https://www.elazarpimentel.com/images/elazar-pimente-twitter-image.webp">
        <meta property="og:description"
                content="Elazar Pimentel - Technology Consulting. Expert in Technology, Project Management & Software Development in Buenos Aires, Argentina">
        <meta property="og:site_name" content="Elazar Pimentel">
        <meta property="og:locale" content="en_US">
        <meta property="og:profile" content="https://www.facebook.com/ElazarPimentel">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@PimentelElazar">
        <meta name="twitter:title"
                content="Elazar Pimentel | Tech Consultant, Web and Software Developer, Project and Product Manager">
        <meta name="twitter:description"
                content="Elazar Pimentel - Technology Consulting. Expert in Technology, Project Management & Software Development in Buenos Aires, Argentina">
        <meta name="twitter:image" content="https://www.elazarpimentel.com/images/elazar-pimente-twitter-image.webp">

        <noscript>
                <link rel="stylesheet" href="assets/css/noscript.css">
        </noscript>
        <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Person",
        "name": "Elazar Pimentel",
        "url": "https://www.elazarpimentel.com",
        "sameAs": [
            "https://twitter.com/PimentelElazar",
            "https://www.linkedin.com/in/elazarpimentel/",
            "https://www.instagram.com/elazar.pimentel/",
            "https://www.facebook.com/ElazarPimentel",
            "https://wa.me/5491137990312",
            "https://t.me/ElazarPimentel",
            "https://threema.id/PY9AVUVT",
            "https://discord.gg/Z8qfZbb8"
        ]
    }
    </script>
</head>


<!--  <body class="is-preload"> Sidebar -->


<body>
        <!-- Sidebar -->
        <section id="sidebar" role="complementary" aria-labelledby="sidebarHeader">
                <div class="inner" role="navigation">
                        <nav>
                                <ul>
                                        <li><a href="#welcome">Welcome</a></li>
                                        <li><a href="#who">Who</a></li>
                                        <li><a href="#what">What</a></li>
                                        <li><a href="#curriculum-vitae">Curriculum Vitae</a></li>
                                        <li><a href="#get-in-touch">Get in Touch</a></li>
                                        <li><a href="#my-blog">Blog - Thoughts or Musings</a></li>
                                        <!-- <li>
                                                    <a href="es-index.html">También en Castellano</a>
                                            </li> -->
                                </ul>
                        </nav>
                </div>
        </section>
        <!-- Wrapper -->
        <div id="wrapper"><!-- Welcome -->
                <section id="welcome" role="main" aria-labelledby="welcomeHeader"
                        class="wrapper style1 fullscreen fade-up">
                        <div class="inner" role="navigation">
                                <header role="banner">
                                        <h1>Elazar Pimentel<br>Technology Consulting Services</h1>

                                        <p>Your visit is sincerely appreciated. Within these pages I have
                                                shared some professional information about me, career, my
                                                curriculum vitae, and -of course- a blog, aptly named, 'Musings'.
                                                It is my hope that you find the information here not only useful
                                                but also engaging.</p>
                                </header>
                        </div>
                </section>
                <!-- who -->
                <section id="who" role="region" aria-labelledby="whoHeader" class="wrapper style2 spotlights">
                        <section><img class="image" src="images/who01.webp" alt="who01" data-position="top center">
                                <div class="content">
                                        <div class="inner" role="navigation">
                                                <h2 id="whoHeader">About Me: A Tech Journey</h2>
                                                <p>From the era of the Commodore 64, I've ridden the thrilling wave
                                                        of technological evolution. My journey began with assembling
                                                        PCs, a
                                                        time when every beep was a conversation with the machine.
                                                        Progressing through tech support, I mastered the art of LAN and
                                                        WAN
                                                        networks, orchestrating servers and data centers. Later, as a
                                                        Full
                                                        Stack Developer, I honed my skills in coding and frameworks,
                                                        evolved into a Development Team Manager, then a Project Manager,
                                                        and ultimately, a Director of Technology. Now, as an independent
                                                        consultant, I merge these experiences to navigate the dynamic
                                                        tech
                                                        landscape. From the Commodore 64 to modern server farms, I've
                                                        experienced the full spectrum of this digital revolution.</p>
                                        </div>
                                </div>
                        </section>
                        <!-- what -->
                        <section id="what" role="region" aria-labelledby="whatHeader">
                                <div class="content">
                                        <div class="inner" role="navigation">
                                                <header class="major">
                                                        <h2 id="whatHeader">About Elazar Pimentel</h2>
                                                </header>
                                                <div>
                                                        <article>
                                                                <p>My professional journey in the technology sector has
                                                                        been
                                                                        diverse and expansive, stretching across key
                                                                        roles from Tech
                                                                        Support Specialist to Full Stack Developer, and
                                                                        evolving from
                                                                        Project Manager to Technology Consultant. In
                                                                        each position, my
                                                                        focus has been on the meticulous orchestration
                                                                        of complex projects,
                                                                        weaving together innovative technologies and
                                                                        strategic business
                                                                        goals to drive operational success and
                                                                        efficiency.</p>
                                                                <p>As a Project Manager, my role extends across a
                                                                        spectrum of
                                                                        initiatives. I aim to spearhead projects by
                                                                        integrating advanced
                                                                        technologies into practical, market-driven
                                                                        solutions. My
                                                                        methodology is deeply anchored in data-driven
                                                                        analysis, ensuring
                                                                        every project not only meets technological
                                                                        standards but also
                                                                        aligns seamlessly with strategic business
                                                                        objectives. In the
                                                                        capacity of an Independent Technology
                                                                        Consultant, I leverage my
                                                                        extensive experience, merging technical
                                                                        knowledge with a strategic
                                                                        business outlook to streamline processes,
                                                                        reengineer workflows, and
                                                                        implement all-encompassing solutions across
                                                                        diverse industries.</p>
                                                                <p>My commitment is to balance best practices with
                                                                        forward-thinking
                                                                        innovation, robust security measures, and
                                                                        steadfast solutions.
                                                                        Whether guiding development teams, managing
                                                                        expansive network and
                                                                        IT systems, or providing expertise in digital
                                                                        forensics, my
                                                                        approach is consistently focused, aiming for
                                                                        precise,
                                                                        results-driven outcomes.</p>
                                                        </article>
                                                </div>
                                        </div>
                                </div>
                        </section>
                        <!-- CV -->
                        <section id="curriculum-vitae" role="region" aria-labelledby="cvHeader">
                                <div class="content">
                                        <div class="inner" role="navigation">
                                                <header class="major">
                                                        <h2 id="cvHeader">Professional Experience</h2>
                                                        <p>A chronicle of my experience in technology, aiming to balance
                                                                innovation, strategy, and best practices.</p>
                                                </header>
                                                <div class="experience-details">
                                                        <article>
                                                                <h3>Program Manager, Applied Technologies in
                                                                        Micromobility Projects
                                                                        (2016 - Present)</h3>
                                                                <h4>Government of Buenos Aires City, Buenos Aires,
                                                                        Argentina</h4>
                                                                <p>In my pivotal role as Program Manager, I spearhead
                                                                        the strategic
                                                                        integration and management of cutting-edge
                                                                        micromobility projects.
                                                                        My expertise lies in steering the convergence of
                                                                        shared bicycle
                                                                        systems, electric scooters, and personal
                                                                        bicycles with the urban
                                                                        infrastructure, underpinned by robust,
                                                                        data-driven strategies. A
                                                                        hallmark of my leadership is the adept
                                                                        coordination of development
                                                                        teams, ensuring the utmost security in code
                                                                        development and
                                                                        seamless integration of technologies across
                                                                        inter-governmental
                                                                        agencies. With a keen focus on project
                                                                        management excellence, I
                                                                        meticulously govern budget allocations, optimize
                                                                        costs, and ensure
                                                                        the precise attainment of project milestones,
                                                                        fortifying the city's
                                                                        infrastructure with innovative and sustainable
                                                                        transport
                                                                        solutions.</p>
                                                        </article>
                                                        <article>
                                                                <h3>Independent Technology Consultant (2009 - Present)
                                                                </h3>
                                                                <p>As an Independent Technology Consultant, I offer
                                                                        applied
                                                                        technology consulting services focused on
                                                                        aligning technological
                                                                        solutions with business objectives. My expertise
                                                                        includes
                                                                        optimizing processes, redesigning workflows,
                                                                        implementing software
                                                                        and hardware solutions, and providing
                                                                        cutting-edge project
                                                                        management solutions in both the private and
                                                                        public sectors.</p>
                                                        </article>
                                                        <article>
                                                                <h3>CEO, HK Security Services (2011 - 2016)</h3>
                                                                <h4>Buenos Aires City, Buenos Aires, Argentina</h4>
                                                                <p>Steered a team of 25 administrative staff and 350
                                                                        security
                                                                        guards as CEO. My tenure was marked by strategic
                                                                        planning,
                                                                        operational efficiency, and empowering
                                                                        employees, which fueled the
                                                                        company's growth and success.</p>
                                                        </article>
                                                        <article>
                                                                <h3>Regional Director of Legal Technologies, FTI Inc.
                                                                        for Latin
                                                                        America (2005 - 2011)</h3>
                                                                <h4>Miami, FL</h4>
                                                                <p>Managed daily operations across nine offices and 200
                                                                        users,
                                                                        overseeing diverse IT systems. Provided
                                                                        expertise and testimony in
                                                                        Forensic Computing and technology-related issues
                                                                        as Director of IT
                                                                        and Legal Technologies.</p>
                                                        </article>
                                                        <article>
                                                                <h3>Regional IT Director, Kroll Inc. in Latin America
                                                                        (1997 -
                                                                        2005)</h3>
                                                                <h4>Miami, FL</h4>
                                                                <p>Directed daily IT operations in six Latin American
                                                                        offices. My
                                                                        responsibilities encompassed server management,
                                                                        workstations, LANs,
                                                                        WANs, firewalls, security policies, and user
                                                                        manuals. Also led the
                                                                        Technical Support department, ensuring efficient
                                                                        technology
                                                                        operation throughout the region.</p>
                                                        </article>
                                                </div>
                                        </div>
                                </div>
                        </section>
                </section>
                <!-- get-in-touch -->
                <section id="get-in-touch" role="region" aria-labelledby="contactHeader" class="wrapper style1 fade-up">
                        <div class="inner" role="navigation">
                                <h2 id="contactHeader">My contact information: get in touch!</h2>
                                <p>I welcome connecting with new people. Feel free to reach out via email, phone, or
                                        social media.</p>
                                <div>
                                        <ul class="contact-info">
                                                <li>
                                                        <h3>Email</h3>
                                                        <a href="mailto:elazar.pimentel@sent.com" target="_blank"
                                                                rel="noopener noreferrer">elazar.pimentel@sent.com</a>
                                                </li>
                                                <li>
                                                        <h3>Phone</h3>
                                                        <span>+54.911.3799.0312</span>
                                                </li>
                                                <li>
                                                        <h3>Connect on Social</h3>
                                                        <ul class="icons">
                                                                <li><a href="https://wa.me/5491137990312"
                                                                                class="icon brands fa-whatsapp"
                                                                                aria-label="WhatsApp" target="_blank"
                                                                                rel="noopener noreferrer"><span
                                                                                        class="label">WhatsApp</span></a>
                                                                </li>
                                                                <li><a href="https://t.me/ElazarPimentel"
                                                                                class="icon brands fa-telegram"
                                                                                aria-label="Telegram" target="_blank"
                                                                                rel="noopener noreferrer"><span
                                                                                        class="label">Telegram</span></a>
                                                                </li>
                                                                <li><a href="https://threema.id/PY9AVUVT" class="fas fa-sms
                                                                                aria-label=" Threema" target="_blank"
                                                                                rel="noopener noreferrer"><span
                                                                                        class="label">Threema</span></a>
                                                                </li>
                                                                <li><a href="https://twitter.com/PimentelElazar"
                                                                                class="icon brands fa-twitter"
                                                                                aria-label="Twitter" target="_blank"
                                                                                rel="noopener noreferrer"><span
                                                                                        class="label">Twitter</span></a>
                                                                </li>
                                                                <li><a href="https://www.linkedin.com/in/elazarpimentel/"
                                                                                class="icon brands fa-linkedin"
                                                                                aria-label="LinkedIn" target="_blank"
                                                                                rel="noopener noreferrer"><span
                                                                                        class="label">LinkedIn</span></a>
                                                                </li>
                                                                <li><a href="https://discord.gg/Z8qfZbb8"
                                                                                class="icon brands fa-discord"
                                                                                aria-label="Discord" target="_blank"
                                                                                rel="noopener noreferrer"><span
                                                                                        class="label">Discord</span></a>
                                                                </li>
                                                        </ul>
                                                </li>
                                        </ul>
                                </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                </section>

                <section id="my-blog" role="region" aria-labelledby="blogHeader" class="wrapper style1 fade-up">
                        <!-- ARTICLES ARTICLES ARTICLES ARTICLES ARTICLES ARTICLES ARTICLES ARTICLES -->
                        <article id="interesting" class="wrapper style2 fade-left">
                                <div class="inner" role="navigation">
                                        <h2 id="blogHeader">Some articles I've writen and things I've found interesting
                                        </h2>
                                </div>
                        </article>
                        <!-- END ARTICLE -->
                        <!-- START ARTICLE SECRET WEAPON -->
                        <article id="secret" class="wrapper style3-alt fade-down">
                                <div class="inner" role="navigation">
                                        <div>
                                                <a href="https://elazarpimentel.com/#secret"
                                                        title="Copy me and link to me!" target="_blank"
                                                        style="display: inline-block; vertical-align: top;">
                                                        <img src="images/anchor-nobk.png"
                                                                alt="anchor for article up in the clouds" width="32"
                                                                height="32">
                                                </a>
                                                <h3
                                                        style="display: inline-block; margin-left: 10px; vertical-align: top;">
                                                        From Astrology to IT: Why Your Next Meeting Needs a Tech-Savvy
                                                        Guide:</h3>
                                        </div>

                                        <img src="images/secret.webp" alt="a bananan taking notes">
                                        <p>Douglas Adams, an absolute genius in wielding satire to dissect
                                                the absurdities of our world, offers a cocktail of wit and wisdom
                                                in his literature. If you've not yet plunged into the depths of his
                                                works, consider this your cosmic nudge. I'd love to say, "Snatch up
                                                all his tomes, and I'll foot the bill!" But, alas, my jam-packed
                                                schedule—so inconveniently hindering my plans to eclipse Tesla and
                                                SpaceX—also curtails my aspirations of becoming your literary
                                                benefactor. So, while I'm otherwise occupied not revolutionizing
                                                transportation or space exploration, you'll have to spring for
                                                Adams' brilliance with your own dime.</p>
                                        <p>Dive into "So Long, and Thanks for All the Fish," where you'll
                                                encounter Tricia McMillan, a former astrophysicist turned news
                                                anchor, entangled in a hilariously doomed interview with astrologer
                                                Gail Andrews. Gail's attempt to dazzle with pseudo-scientific
                                                babble about celestial bodies orbiting in perfect circles around
                                                Earth backfires spectacularly when Tricia, armed with her
                                                astrophysics prowess, sets the record straight with Kepler's laws,
                                                leaving Gail adrift in the turbulent waters of live TV
                                                embarrassment.</p>
                                        <p>But enough book chatter. Let's pivot to a topic I relish:
                                                attendees in meetings waxing lyrical about bits and megabytes to
                                                justify bloated deadlines or budgets. Here, I shine as the team's
                                                secret weapon.</p>
                                        <p>Contrary to my grievances lodged with video conferencing
                                                platforms regarding the lack of titles and/or positions under the
                                                box of each meeting participant, this occasionally plays to our
                                                advantage. And when the scales tip our way, allow me a moment of
                                                unabashed satisfaction—it's positively delightful.</p>
                                        <p>Surrounded by a cadre of architects, political scientists, and
                                                legal eagles, I watch as they navigate the murky waters of
                                                technical requests. Our vendors, in their infinite wisdom, often
                                                conjure up technological interpretations as flawed as applying
                                                Kepler's laws to a game of ping pong. That's my cue to channel my
                                                inner Columbo, feigning simplicity with pointed inquiries.</p>
                                        <p>Picture this: "Thank you for that enlightening spiel. I'm
                                                somewhat new to this tech you mentioned. But, in my cursory glance
                                                at the GitHub docs and after tinkering with the json file, I
                                                noticed that Mr. Johnson's request might just need a new
                                                'full_name_lowercase' field, perhaps a minor PHP tweak, or
                                                something with Java or Python. Just a thought. It took me a couple
                                                of hours—why the four-week estimate? Enlighten me, as I'm typically
                                                wrangling projects, not code. What's the real technical hurdle
                                                here?" The ensuing silence is music to my ears.</p>
                                        <p>So, next time you stride into a meeting, remember: alongside
                                                your lawyer and accountant, why not bring along your secret weapon?
                                                A Project Manager who moonlights as a Full Stack Developer and
                                                spent their teenage years mastering the art of computer assembly
                                                and dial-up connections. This individual might not only save your
                                                budget but also add a zest of entertainment as you watch the other
                                                party squirm, backpedaling their timelines and inflated quotes.</p>
                                        <footer role="contentinfo"><em>Elazar Pimentel, 2024</em></footer>
                                        <a href="#welcome" class="button small scrolly">Up</a>
                                </div>
                        </article>
                        <!-- END ARTICLE -->
                        <!-- START ARTICLE BANANA -->
                        <article id="bananas" class="wrapper style1 fade-down">
                                <div class="inner" role="navigation">
                                        <div>
                                                <a href="https://elazarpimentel.com/#bananas"
                                                        title="Copy me and link to me!" target="_blank"
                                                        style="display: inline-block; vertical-align: top;">
                                                        <img src="images/anchor-nobk.png"
                                                                alt="anchor for article up in the clouds" width="32"
                                                                height="32">
                                                </a>
                                                <h3
                                                        style="display: inline-block; margin-left: 10px; vertical-align: top;">
                                                        Don’t buy a new computer until you understand bananas:</h3>
                                        </div>

                                        <img src="images/banana_notes.png" alt="a banana taking notes">
                                        <p>Ah, the age-old debate: to buy a new computer or not? Let's embark on a
                                                journey together before you
                                                throw your hard-earned cash at the latest shiny gadget.</p>
                                        <p>First off, before you run to the nearest computer shop, chat with someone who
                                                actually knows a thing
                                                or two about IT. And by IT, I'm not referring to your computer in all
                                                caps as though it's about
                                                to perform a solo at Carnegie Hall; I mean Information Technology—the IT
                                                girl (or guy).</p>
                                        <p>Even that friend of yours who can do those strange formulas in Excel probably
                                                can't tell a computer processor from a
                                                stick of RAM or a hard drive if it came with pictures. But that's
                                                perfectly fine! A deep understanding of these
                                                components requires years of study, a luxury most people wisely spend
                                                binge-watching TV series.
                                                But that's where we, the noble IT Shieldmaidens and knights, come to
                                                your rescue.</p>

                                        <p>Let me paint you a picture with an analogy. Imagine a person who can think at
                                                the speed of either 100
                                                or 200 bananas an hour (and for those familiar with 9GAG, hello there).
                                                Yes, bananas.</p>
                                        <p>This banana-powered thinker can only hold so much information in mind at
                                                once—think of it as being
                                                able to remember four sheets. So, to work with more information, they
                                                need to use a paper
                                                notebook.</p>
                                        <p>Consider this: if you toss them a list of names to alphabetize that's only
                                                two pages long, and their
                                                brain can juggle four pages at once, they'll zip through the task with
                                                their 100-banana-an-hour
                                                processing power. No sweat, right?</p>
                                        <p>But give them a <em>six-page list</em> when they can only hold <em>four
                                                        pages</em> in their head? Out
                                                comes the pencil and paper, and suddenly, we're not so zippy. That's
                                                because the act of writing
                                                down, erasing, and sorting is, well, painstakingly slow. Even a
                                                200-banana brain won't speed up
                                                the manual labor of using a pencil to write on a paper notebook, reading
                                                the list, erasing, and
                                                so forth.</p>
                                        <p>Moving away from the metaphors, your computer's brain (processor) and
                                                short-term memory (RAM)
                                                function in a similar manner. When the RAM overflows, your computer
                                                starts scribbling on the
                                                hard drive (the slow paper notebook here), which is like trying to
                                                sprint through a pool of
                                                molasses compared to the speed of RAM.</p>
                                        <p>And let's not even start on mechanical hard drives with their spinning disks
                                                and read/write heads.
                                                Yes, they're as old-school as your grandma's turntable. The modern hero
                                                of our story is the SSD,
                                                or Solid State Drive, which zips and zooms without any moving parts,
                                                making your computer fly.
                                        </p>
                                        <p>If your computer is more sluggish than a snail on a leisurely stroll,
                                                consider boosting its RAM (so
                                                it can do stuff without having to write it down). Four gigs? Please,
                                                we're not in the Stone Age.
                                                Aim for eight gigs to keep things smooth, though sixteen gigs is where
                                                the magic happens. And
                                                swap that dusty old mechanical hard drive for an SSD.</p>
                                        <p>Regarding the processor, unless you're calculating orbits to launch rockets
                                                or editing the next
                                                blockbuster movie, most processors will handle your daily dose of cat
                                                videos and spreadsheets
                                                with grace.</p>
                                        <p>So, remember, before you rush to buy a new computer, make sure the one you're
                                                thinking of replacing
                                                doesn't already have at least eight gigs of RAM and an SSD. If not,
                                                consider upgrading—you might
                                                extend your computer's life by five to ten years. I'm writing this on a
                                                ten-year-old computer
                                                myself, where I do all sorts of stuff, including programming large
                                                software and working with big
                                                databases.</p>
                                        <p>You'll be happy to know that when you take your computer to get its
                                                much-needed upgrade they will
                                                take out all the cat hair and bread crumbs from the fans, along with
                                                some other heat-conducting
                                                paste we are not going to get into now or ever, which will do it a world
                                                of good.</p>
                                        <p>Your wallet—and your sanity—will thank you. And if you're feeling
                                                adventurous, give Linux a whirl.
                                                You'll thank me later, once you've crossed over to the enlightened side
                                                of computing.</p>
                                        <footer role="contentinfo"><em>Elazar Pimentel, 2024</em></footer>
                                        <a href="#welcome" class="button small scrolly">Up</a>
                                </div>
                        </article>

                        <!-- END ARTICLE -->
                        <!-- START ARTICLE CLOUD -->

                        <article id="up_in_the_clouds" class="wrapper style2-alt fade-down">
                                <div class="inner" role="navigation">
                                        <div>
                                                <a href="https://elazarpimentel.com/#up_in_the_clouds"
                                                        title="Copy me and link to me!" target="_blank"
                                                        style="display: inline-block; vertical-align: top;">
                                                        <img src="images/anchor-nobk.png"
                                                                alt="anchor for article up in the clouds" width="32"
                                                                height="32">
                                                </a>
                                                <h3
                                                        style="display: inline-block; margin-left: 10px; vertical-align: top;">
                                                        There is no cloud, but don’t worry, there are spoons.</h3>
                                        </div>

                                        <img src="images/there-is-no-cloud.jpg" alt="There is no cloud image">
                                        <p>Let's take a little journey, inspired by a wise young
                                                philosopher in a classic film:</p>
                                        <p>Neo: What truth?<br>
                                                Boy: There is no spoon.<br>
                                                Neo: There is no spoon?<br>
                                                Boy: Then you'll see that it is not the spoon that bends, it is
                                                only yourself.</p>
                                        <p>So, there is no cloud, servers cannot be bent, it is you that
                                                bends when you connect from one WiFi spot and then go somewhere
                                                else and connect again to the same server, or one just like it.</p>
                                        <p>So, you store your precious data in "the cloud," do you? Ah,
                                                "the cloud" - that magical place where data frolics free,
                                                unencumbered by physical constraints. It's akin to explaining to
                                                non-tech mortals the difference between an API and a Web Service.
                                                Spoiler: They don't care. As long as it works, it might as well be
                                                unicorn dust powering their apps.</p>
                                        <p>Remember the days when getting an email address was like being
                                                handed the keys to the kingdom? I do. But let's not wander down
                                                memory lane to the land of BBS, lest we start snoring into our
                                                ergonomic keyboards.</p>
                                        <p>Here's my beef (because apparently, I'm a tech grump): Once upon
                                                a time, humans knew that the internet wasn't just "on" their
                                                computer. They understood the concept of a server, a mystical box
                                                where websites lived and emails vacationed. Fast forward, and
                                                somehow, this knowledge got lost faster than socks in a
                                                laundry.</p>
                                        <p>Flashback twenty years, and those servers were connected
                                                by—let’s simplify this—really long or virtual cables. Location?
                                                Irrelevant. Whether you were in Kathmandu or La Quiaca, your
                                                digital requests journeyed across the globe, seeking the wisdom of
                                                servers far and wide.</p>
                                        <p>Then, companies had an epiphany. Why not decentralize this
                                                digital treasure trove? Place servers in strategic locations, so
                                                your cat videos load faster. Revolutionary, right? Well, not quite.
                                                It was just common sense with a dash of logistics, and again, that
                                                was twenty years ago.</p>
                                        <p>Fast forward to present time. I'm advising a client to trust
                                                their digital soul to Google's tender embrace. Their concern? "But
                                                it's in the cloud!" Ah, the cloud—a term as misunderstood as my
                                                teenage emo phase. So, I posed two questions: Where do you think
                                                your emails stretch their legs now? And who's better at guarding
                                                your digital life, Google or your IT team?</p>
                                        <p>Needless to say, their data now frolics in Google's servers,
                                                happier than ever.</p>
                                        <p>In conclusion, dear readers, the cloud is not some mystical
                                                ether. It's servers. Lots of them. Just like two decades ago. And
                                                before you ask, no, you can't literally hire a cloud. It's still
                                                about servers—just a lot more flexible. And no, we're not opening
                                                the floor to comments. You know how those end.</p>
                                        <p>P.S. To my fellow tech enthusiasts ready to lecture me on load
                                                balancing: Yes, I know. But let's not spoil the magic for the rest,
                                                shall we? After all, who doesn't enjoy a bit of mystery in their
                                                tech?</p>
                                        <footer role="contentinfo"><em>Elazar Pimentel, 2023</em></footer>
                                        <a href="#welcome" class="button small scrolly">Up</a>
                                </div>
                        </article>
                        <!-- END ARTICLE -->
                        <!-- START ARTICLE TECH EVENT-->
                        <article id="circus" class="wrapper style1-alt fade-down">
                                <div class="inner" role="navigation">
                                        <div>
                                                <a href="https://elazarpimentel.com/#circus"
                                                        title="Copy me and link to me!" target="_blank"
                                                        style="display: inline-block; vertical-align: top;">
                                                        <img src="images/anchor-nobk.png"
                                                                alt="anchor for article up in the clouds" width="32"
                                                                height="32">
                                                </a>
                                                <h3
                                                        style="display: inline-block; margin-left: 10px; vertical-align: top;">
                                                        Another Tech Event, Not Orange, but AI is the New Black</h3>
                                        </div>

                                        <img src="images/orange.webp"
                                                alt="an Information Technology event with an AI robot in the middle">
                                        <p>In corporate extravaganzas, we all dutifully parade to these
                                                grand networking shindigs. We engage in the sacred ritual of
                                                mingling, exchanging business cards as if they're rare
                                                collectibles.</p>
                                        <p>Now, let's address the environmental faux pas of discarding
                                                those business cards. For the love of our green Earth, please use a
                                                recycling bin specifically for paper.</p>
                                        <p>The relentless sales pitches. They're the same rehearsed
                                                monologues, just with a new coat of paint each year. "We don't just
                                                offer antivirus services, but a comprehensive solution for your
                                                business landscape." But let's cut through the fluff – you can swap
                                                'antivirus' with 'cloud services', 'intelligent' networks, or
                                                'edge-servers', and it's essentially the same script. You don’t
                                                have to say it Bob, we already know you work with the Fortune 500s
                                                or Blue-chip juggernauts, somehow we already knew that, all of you
                                                do.</p>
                                        <p>What? You too took all those training courses in Agile, Scrum,
                                                Lean, Six Sigma, and so forth but end up with a nice GANTT graph in
                                                a spreadsheet anyway? Well, let's face it, until Marie finishes her
                                                DB management bit you can only do so much, and Lizzie can't finish
                                                her Web Service until you get Marie to finish hers so you can do
                                                the JavaScript for the bit that John did, but I digress, it's an AI
                                                Project Management solution for you now, pal.</p>
                                        <p>But, alas! AI. Oh, AI. It's the new black, slapped onto every
                                                product like a magic potion. Antivirus? No, it's AI antivirus now.
                                                Network Management? Please, that's ancient history; it's AI Network
                                                Management now. And Intrusion Detection? If there's no AI in the
                                                name, you might as well be in the dark ages.</p>
                                        <p>And as for this article, well, I'm running it through ChatGPT
                                                (the paid version, because that’s how my folks raised me). Let's
                                                face it, we're not all literary geniuses, I can never get the
                                                second S in the right spot in “business”. And while Bard has its
                                                charm, it still needs to sip its alphabet soup and sit at the kid's
                                                table until it's ready to play with the big kids.</p>
                                        <p>So, until we cross paths at the next tech circus, keep those
                                                business cards circulating in the green loop and your cynicism
                                                well-nourished. Cheers, and happy ChatGPT’ing – the grown-up
                                                version, of course!</p>
                                        <p>P.S.: As a happy Latin American, a bit of advice for those of my
                                                fellow non-native English speakers, we are not being difficult, we
                                                really did not understand what you said. If you ask the audience if
                                                we all know about H-Servers and you hear silence, it is because we
                                                are fascinated that you are finally talking about a new thing, not
                                                because we don't know you meant edge-server; we were just hoping
                                                someone made a server shaped like an H, it would be a nice
                                                change.</p>
                                        <footer role="contentinfo"><em>Elazar Pimentel, 2023</em></footer>
                                        <a href="#welcome" class="button small scrolly">Up</a>
                                </div>
                        </article>
                        <!-- END ARTICLE -->
                        <!-- START ARTICLE -->
                        <article id="c_to_carpentry" class="wrapper style2-alt fade-down">
                                <div class="inner" role="navigation">
                                        <div>
                                                <a href="https://elazarpimentel.com/#c_to_carpentry"
                                                        title="Copy me and link to me!" target="_blank"
                                                        style="display: inline-block; vertical-align: top;">
                                                        <img src="images/anchor-nobk.png"
                                                                alt="anchor for article up in the clouds" width="32"
                                                                height="32">
                                                </a>
                                                <h3
                                                        style="display: inline-block; margin-left: 10px; vertical-align: top;">
                                                        The Odyssey of a Programmer: From C to Carpentry</h3>
                                        </div>

                                        <img src="images/carpentry.webp"
                                                alt="programmer who dreams of being a carpenter">
                                        <p>Programming, ah, the never-ending labyrinth of languages, each
                                                more intricate and esoteric than the last. My journey began in the
                                                primordial digital soup with C, a language so close to the metal
                                                you could hear the hum of the CPU. But no sooner had I mastered its
                                                curly braces than I was thrust into the object-oriented world of
                                                C++, where my code began to resemble a complex organism, evolving
                                                and adapting.</p>
                                        <p>The plot thickened as I delved into the depths of databases with
                                                dbase and Clipper. From there, it was a hop, skip, and a jump to
                                                the vibrant lands of HTML, where I once naively thought everything
                                                could be solved with tables. Ah, the table era, a simpler time when
                                                layouts were a precarious stack of cells and rows. But soon, this
                                                too was swept away by the tidal wave of CSS and the mighty div tag,
                                                banishing tables to the dark corners of tabular data.</p>
                                        <p>Visual Basic beckoned, luring me into the realm of Windows
                                                applications, only to be followed by the siren song of ASP and the
                                                structured queries of Microsoft SQL Server. The web was a wild
                                                frontier, and I, a digital cowboy, wrangling code and markup in the
                                                pursuit of pixel perfection.</p>
                                        <p>As if caught in a whirlwind, I was swept away by the chilly
                                                winds of ColdFusion, only to land in the warm embrace of MySQL and
                                                the pearly gates of Perl. JavaScript and CSS added flair and
                                                animation to my creations, while PHP whispered sweet nothings,
                                                promising server-side bliss. Python slithered into my toolkit for
                                                those everyday tasks, a language so versatile it felt like a Swiss
                                                Army knife in my hands.</p>
                                        <p>Just when I thought I had found my footing, Go (Golang) burst
                                                onto the scene, promising unparalleled performance. But alas, it
                                                was a niche siren, luring only the bravest sailors. Rust, they
                                                said, was the future, but it too was a path less traveled. So, back
                                                to the comforting arms of PHP and Python I went, only to be asked
                                                the unthinkable: "How did you not learn Java?"</p>
                                        <p>And just when I thought I understood the landscape, MVC stormed
                                                in, upending my notions of web development with its Models, Views,
                                                and Controllers. ASP, PHP... it didn't matter. The world was
                                                modular now. But no, the sands shifted yet again. Laravel and MVC,
                                                my hard-earned mastery, were old news. The new kid on the block?
                                                React with Java. And let's not forget the NoSQL databases, a rebel
                                                against the structured world of SQL, promising flexibility and
                                                scalability.</p>
                                        <p>So here I am, contemplating a simpler life. Carpentry, perhaps?
                                                There's a certain allure to working with wood, shaping and crafting
                                                with your hands, away from the fickleness of the digital world. Or
                                                maybe just watching others do it on YouTube, dreaming of a life
                                                less coded.</p>
                                        <p>But alas, duty calls. It's time to check what new programming
                                                language, framework, or trend is waiting to sweep me off my feet.
                                                Java and NoSQL reign today, but in this ever-evolving world of
                                                technology, who knows what tomorrow holds? Until we meet again,
                                                fellow travelers on this coding odyssey.<br></p>
                                        <footer role="contentinfo"><em>Elazar Pimentel, 2024</em></footer>
                                        <a href="#welcome" class="button small scrolly">Up</a>
                                </div>
                        </article>
                        <!-- END ARTICLE -->
                        <!-- START ARTICLE -->
                        <article id="stand" class="wrapper style1-alt fade-down">
                                <div class="inner" role="navigation">
                                        <div>
                                                <a href="https://elazarpimentel.com/#stand"
                                                        title="Copy me and link to me!" target="_blank"
                                                        style="display: inline-block; vertical-align: top;">
                                                        <img src="images/anchor-nobk.png"
                                                                alt="anchor for article up in the clouds" width="32"
                                                                height="32">
                                                </a>
                                                <h3
                                                        style="display: inline-block; margin-left: 10px; vertical-align: top;">
                                                        Embracing Unconventional Career Paths: Standing Out in a Sea of
                                                        Sameness</h3>
                                        </div>

                                        <img src="images/stand.webp" alt="There is no cloud image">
                                        <p>In a world where conformity reigns supreme, standing out in the
                                                job market has become an increasingly elusive feat. Everywhere you
                                                turn, it seems like everyone is vying for the coveted titles of
                                                ontological coach or scrum master, eager to showcase their
                                                transformative coaching skills or agile project management prowess.
                                                But amidst this sea of sameness, I've chosen to take a different
                                                route – one that's delightfully unconventional and refreshingly
                                                authentic.</p>
                                        <p>As I navigate the professional landscape, I've come to realize
                                                that success isn't just about mastering the latest buzzwords or
                                                following the crowd. It's about embracing your unique quirks and
                                                staying true to your self-assured self, even if it means going
                                                against the grain. So, while <strong>EVERYONE</strong> feverishly
                                                pursues ontological coaching certifications and scrum master
                                                trainings, I've proudly marched to the beat of my own drum,
                                                reveling in the delicious irony of my career rebellion.</p>
                                        <p>The hallmark of my unconventional approach is my unapologetic
                                                embrace of sarcasm and irony. Instead of offering bland platitudes
                                                and generic praise, I'm not afraid to inject a healthy dose of wit
                                                and irreverence into my interactions. When I genuinely admire
                                                someone's work, I don't hesitate to say, "I think that is brilliant
                                                work." But when faced with less-than-stellar ideas, I'm not one to
                                                mince words. Instead, I tactically steer the conversation in a more
                                                productive direction, saying, "Yes, that is one great way of doing
                                                it. Let's keep that in mind. Also, let's consider this other
                                                idea."</p>
                                        <p>Another key aspect of my unconventional approach is my
                                                unwavering devotion to my Gantt chart. While others may wax poetic
                                                about the virtues of Kanban boards, I remain steadfast in my love
                                                for the structured simplicity of the Gantt chart. It's been my
                                                trusted companion through countless projects, guiding me with its
                                                clear timelines and milestones.</p>
                                        <p>In conclusion, standing out in the job market doesn't always
                                                mean conforming to the latest trends or following the crowd. At
                                                times, it's about embracing your unique quirks and staying true to
                                                your authentic self. So, if you're tired of swimming in the sea of
                                                sameness, why not take a page out of my playbook? Embrace your
                                                inner contrarian, reject the allure of mainstream career choices,
                                                and blaze your own trail with unapologetic gusto. After all, in a
                                                world full of ontological coaches and scrum masters, being
                                                delightfully different is the ultimate flex.</p>
                                        <p><strong>PS:</strong> Now, if you're one of those individuals
                                                who, rather than making edits directly in the online Google Docs
                                                file like a civilized human being, feels compelled to download said
                                                file, tinker with it offline, and then re-upload it to Google Drive
                                                with a title that rivals the length of a congressional bill, well,
                                                let's just say your decision-making skillset might benefit from a
                                                little recalibration. Perhaps a week in a room with an ontological
                                                coach and a relentless loop of the soundtrack "We Can Dance" on
                                                repeat would help you see the error of your ways. Because really,
                                                who needs efficiency and collaboration online when you can indulge
                                                in the joy of unnecessarily having six versions of the same file
                                                with the added "approved by legal. Final version. Revised by Laura.
                                                Checked by Mike.docx"?</p>
                                        <footer role="contentinfo"><em>Elazar Pimentel, 2024</em></footer>
                                        <a href="#welcome" class="button small scrolly">Up</a>
                                </div>
                        </article>
                        <!-- END ARTICLE -->
                </section>

        </div>
        <!-- Footer -->
        <footer role="contentinfo" id="footer" class="wrapper style1-alt">
                <div class="inner" role="navigation">
                        <p>© 2024 Elazar Pimentel. All rights reserved.</p>
                </div>
        </footer>
        <!-- Scripts -->
        <script src="assets/js/jquery.min.js" async></script>
        <script src="assets/js/jquery.scrollex.min.js" async></script>
        <script src="assets/js/jquery.scrolly.min.js" async></script>
        <script src="assets/js/browser.min.js" async></script>
        <script src="assets/js/breakpoints.min.js" async></script>
        <script src="assets/js/util.js" async></script>
        <script src="assets/js/main.js" async></script>
</body>


</html>