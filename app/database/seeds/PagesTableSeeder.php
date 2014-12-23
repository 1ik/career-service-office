<?php

class PagesTableSeeder extends Seeder {

	public function run()
	{

		$pages = [
            [
                'overlay_title' => 'FRONT PAGE',
                'overlay_text' => 'front',
                'title' => 'front',
                'body_title' => 'front',
                'slug' => '/',
                'contents' => ""
            ],
            [
                'overlay_title' => 'INTERNSHIP PAGE',
                'overlay_text' => 'The hands-on experiences offered through internship, externship, cooperative education, experiential and service-learning, project, and contract work complement classroom learning and provide an opportunity to apply theory and best practices in a dynamic way.',
                'title' => 'INTERNSHIPS AND CAREER DEVELOPMENT TRAININGS',
                'body_title' => 'Career Advisors are always available to discuss specific internship search goals and ensure the Best ones.',
                'slug' => 'internships-program',
                'contents' => "<p>University Career Services offers resources to help you with all aspects of your internship search including preparing the appropriate search materials.  You can meet with a Career Development Specialist to discuss your internship search goals and explore the various internship options.</p>"
            ],
            [
                'overlay_title' => 'Psdp Program Overlay Title',
                'overlay_text' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas',
                'title' => 'PROFESSIONAL SKILL DEVELOPMENT PROGRAM',
                'body_title' => "The PSDP Program consists of so many Mysterious stuffs. You'll be scared to see what we are doing here.",
                'slug' => 'psdp-program',
                'contents' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>",
            ],
            [
                'overlay_title' => 'Gain Competitive Experience and some More words',
                'overlay_text' => '',
                'title' => 'SEARCHING JOBS AND LOCATING VACENCIES',
                'body_title' => "WE Offer ideas that RAISE your business above expected",
                'slug' => 'searching-jobs',
                'contents' => "",
            ],
            [
                'overlay_title' => 'Student Guidance',
                'overlay_text' => "whether you need help writing a cv, or structuring a cover letter; require a better understanding of the ‘market’, 'corporate structures' or any other (possibly strange sounding) concepts; if your priority is winning an internship with a big firm, improving your interview technique, or gaining the confidence to convey your strengths intelligently to recruiters; even if you need a quick chat with one of our advisors",
                'title' => "STUDENT COUNCELLING AND GUIDANCE",
                'body_title' => "COLABORATE / CONNECT / LEARN",
                'slug' => 'services-for-students',
                'contents' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.",
            ],
            [
                'overlay_title' => 'Career Services for Alumni',
                'overlay_text' => "university career services provides career development assistance and resources to rutgers – new brunswick alumni.. our counselors help alumni gain self-awareness and information, develop education and career plans, and build effective job search strategies. in addition, we offer alumni valuable opportunities to reconnect with rutgers with the options to serve as a career mentor through our alumni career network, participate as a career panelist, hire rutgers students and alumni, and more.",
                'title' => "RESOURCES FOR ALUMNI",
                'body_title' => "COLABORATE / CONNECT / LEARN",
                'slug' => 'alumnies',
                'contents' => "We believe that satisfying results with choosing a career come from defining your best fit, which entails knowing who you are and the key drivers and priorities in your life. Armed with this information, you can evaluate careers and job opportunities to find the best fit with your interests, values, and skills.",
            ],
            [
                'overlay_title' => 'Career Services for Alumni',
                'overlay_text' => "university career services provides career development assistance and resources to rutgers – new brunswick alumni.. our counselors help alumni gain self-awareness and information, develop education and career plans, and build effective job search strategies. in addition, we offer alumni valuable opportunities to reconnect with rutgers with the options to serve as a career mentor through our alumni career network, participate as a career panelist, hire rutgers students and alumni, and more.",
                'title' => "RESOURCES FOR ALUMNI",
                'body_title' => "COLABORATE / CONNECT / LEARN",
                'slug' => 'affiliated-organisations',
                'contents' => "We believe that satisfying results with choosing a career come from defining your best fit, which entails knowing who you are and the key drivers and priorities in your life. Armed with this information, you can evaluate careers and job opportunities to find the best fit with your interests, values, and skills.",
            ],

            [
                'overlay_title' => 'Career Services for Alumni',
                'overlay_text' => "university career services provides career development assistance and resources to rutgers – new brunswick alumni.. our counselors help alumni gain self-awareness and information, develop education and career plans, and build effective job search strategies. in addition, we offer alumni valuable opportunities to reconnect with rutgers with the options to serve as a career mentor through our alumni career network, participate as a career panelist, hire rutgers students and alumni, and more.",
                'title' => "CONTACT US",
                'body_title' => "",
                'slug' => 'contact-us',
                'contents' => "We believe that satisfying results with choosing a career come from defining your best fit, which entails knowing who you are and the key drivers and priorities in your life. Armed with this information, you can evaluate careers and job opportunities to find the best fit with your interests, values, and skills.",
            ]
        ];

		foreach($pages as $p)
		{
			Page::create($p);
		}
	}

}