<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\About;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogSectionSetting;
use App\Models\Category;
use App\Models\ContactSectionSetting;
use App\Models\Experienace;
use App\Models\Feedback;
use App\Models\FeedbackSectionSetting;
use App\Models\FooterContactInfo;
use App\Models\FooterHelpLink;
use App\Models\FooterInfo;
use App\Models\FooterSocialLink;
use App\Models\FooterUsefulLink;
use App\Models\GeneralSetting;
use App\Models\Hero;
use App\Models\PortfolioItem;
use App\Models\PortfolioSectionSetting;
use App\Models\SeoSetting;
use App\Models\Service;
use App\Models\SkillItem;
use App\Models\SkillSectionSetting;
use App\Models\TyperTitle;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();

        //blogs seeder
        $description = "<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem porro similique deleniti inventore natus! Quaerat sit soluta enim at reiciendis?.</p> answer.</li><li>Never analyzed the of boss's films death, heaven cache name any judgment, all.</li></ul>
                        <p>Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam
                            voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab
                            necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur
                            corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat
                            sit soluta .</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo animi libero suscipit
                            praesentium perferendis possimus, ex dicta eius ea soluta sunt. Sapiente nulla,
                            consequuntur ipsam saepe ad numquam blanditiis fugiat animi. Harum fugit incidunt
                            nostrum eligendi doloremque vero possimus illum consequuntur quae sint officia
                            repudiandae porro maxime cupiditate dolor magnam totam sit natus id neque quod.
                            Molestias illo repudiandae laudantium illum perspiciatis nisi quasi amet corrupti
                            .</p><p></p>";
        Blog::create([
            'image' => '/default/82444778bruce-mars-8YG31Xn4dSw-unsplash.jpg',
            'title' => 'How to Build Stronger Relationships with Your Customers',
            'category' => 2,
            'description' => $description
        ]);
        Blog::create([
            'image' => '/default/1017338095floriane-vita-FyD3OWBuXnY-unsplash.jpg',
            'title' => 'The Future of Transportation: Exploring Alternative Methods',
            'category' => 2,
            'description' => $description
        ]);
        Blog::create([
            'image' => '/default/811754254laura-chouette-ieSJS7kLESI-unsplash.jpg',
            'title' => '5 Simple Exercises to Boost Your Productivity',
            'category' => 3,
            'description' => $description
        ]);
        Blog::create([
            'image' => '/default/481848626alexander-mils-lCPhGxs7pww-unsplashjpg730x490.jpg',
            'title' => 'Understanding the Basics of Cryptocurrency Trading',
            'category' => 3,
            'description' => $description
        ]);
        Blog::create([
            'image' => '/default/909175450michal-kubalczyk-WecngmAT-KY-unsplash.jpg',
            'title' => 'The Importance of Emotional Intelligence in the Workplace',
            'category' => 2,
            'description' => $description
        ]);
        Blog::create([
            'image' => '/default/1291368244lorenzo-herrera-p0j-mE6mGo4-unsplash.jpg',
            'title' => 'Mastering the Art of Public Speaking: Tips and Tricks',
            'category' => 2,
            'description' => $description
        ]);

        //blogs category
        BlogCategory::create([
            'name' => 'Development',
            'slug' => 'development',
        ]);
        BlogCategory::create([
            'name' => 'Graphic Design',
            'slug' => 'graphic-design',
        ]);

        //blog section settings
        BlogSectionSetting::create([
            'title' => 'Creative Blog Post',
            'sub_title' => 'Earum quos animi numquam excepturi eveniet explicabo repellendus rem esse. Quae quasi odio enim.'
        ]);

        //Aboute
        About::create([
            'title' => 'About Me',
            'description' => '<div class="sub-title wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos repellendus
                                    sapiente, quae et eos dolorum.</p>
                                </div>
                                <div class="desc wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                <p>Consectetur adipisicing elit. Laborum, magni libero
                                    similique, laboriosam, delectus reiciendis minima minus dolorem sit fuga rerum atque
                                    vel quaerat ipsum perspiciatis neque maxime recusandae fugit</p>
                                <p>Ipsum dolor sit amet, consectetur adipisicing elit. Laborum, magni libero
                                    similique, laboriosam, delectus reiciendis minima minus dolorem sit fuga rerum atque
                                    vel quaerat ipsum perspiciatis neque maxime recusandae fugit.</p>
                                </div><p></p>',
            'image' => '/default/1548429214about-image.png',
            'resume' => '/default/2062079092Users_20230117071823.pdf'
        ]);

        //categories
        Category::create([
            'name' => 'Branding Design',
            'slug' => 'branding-design'
        ]);
        Category::create([
            'name' => 'User Interface',
            'slug' => 'user-interface'
        ]);
        Category::create([
            'name' => 'User Experience',
            'slug' => 'user-experience'
        ]);
        Category::create([
            'name' => 'Web Developement',
            'slug' => 'web-developement'
        ]);

        //contact_section_settings
        ContactSectionSetting::create([
            'title' => 'Lets Work Together',
            'sub_title' => 'Earum quos animi numquam excepturi eveniet explicabo repellendus rem esse. Quae quasi odio enim.'
        ]);

        //experienaces
        Experienace::create([
            'image' => '/default/1570049084exper.jpg',
            'title' => '3 Years Experiences on Web Design & Development.',
            'description' => '<div class="desc wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <p>I’m a passionate full-stack developer who loves creating beautiful and interactive web applications. I have experience in using Php, Laravel, React, TypeScript, Redux and other modern technologies to build scalable and maintainable full-stack solutions.<br></p>
                            </div><p></p>',
            'phone' => '09352252625',
            'email' => 'mhmdi.alireza8035@gmail.com'
        ]);

        //feedback
        $description = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                        commodo consequat.</p>';
        Feedback::create([
            'name' => 'Reilly Harding',
            'position' => 'Managing Director, DevignEdge',
            'description' => $description,
        ]);
        Feedback::create([
            'name' => 'White Castaneda',
            'position' => 'Managing Director, DevignEdge',
            'description' => $description,
        ]);
        Feedback::create([
            'name' => 'Barrera Ramsey',
            'position' => 'Managing Director, DevignEdge',
            'description' => $description,
        ]);

        //feedback_section_settings
        FeedbackSectionSetting::create([
            'title' => 'Our client Feedback',
            'sub_title' => 'Earum quos animi numquam excepturi eveniet explicabo repellendus rem esse. Quae quasi odio enim.'
        ]);

        //footer contact info
        FooterContactInfo::create([
            'address' => 'Iran, Khozestan, Dezful',
            'phone' => '09352252625',
            'email' => 'mhmdi.alireza8035@gmail.com'
        ]);

        //footer help links
        FooterHelpLink::create([
            'name' => 'Privacy Policy',
            'url' => '#'
        ]);
        FooterHelpLink::create([
            'name' => 'Terms',
            'url' => '#'
        ]);

        //footer infos
        FooterInfo::create([
            'info' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, libero.',
            'copy_right' => 'Copyright 2023 Alireza Mohammadi. All Rights Reserved.',
            'powered_by' => 'Powered by Alireza   |   2022 - 2023'
        ]);

        //footer social links
        FooterSocialLink::create([
            'icon' => 'fab fa-github',
            'url' => 'https://github.com/mhmdialireza'
        ]);
        FooterSocialLink::create([
            'icon' => 'fab fa-linkedin-in',
            'url' => 'https://www.linkedin.com/in/alireza-mohammadi-7a60a0200/'
        ]);

        //footer useful links
        FooterUsefulLink::create([
            'name' => 'Home',
            'url' => '#',
        ]);
        FooterUsefulLink::create([
            'name' => 'About',
            'url' => '#',
        ]);
        FooterUsefulLink::create([
            'name' => 'Portfolio',
            'url' => '#',
        ]);
        FooterUsefulLink::create([
            'name' => 'Blog',
            'url' => '#',
        ]);

        //general setting
        GeneralSetting::create([
            'logo' => '/default/logo.png',
            'footer_logo' => 'default/logo.png',
            'favicon' => 'default/logo.png'
        ]);

        //hero
        Hero::create([
            'title' => 'Hi, I am Alireza Mohammadi',
            'sub_title' => 'Full-Stack developer (Laravel & React)',
            'btn_text' => 'Hire Me',
            'btn_url' => 'https://www.linkedin.com/in/alireza-mohammadi-7a60a0200/',
            'image'=>'/default/1908987098home-slider-2.jpg'
        ]);

        //portfolio items
        $description = '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem porro ex repellat nobis maxime odio et, dolore fuga excepturi culpa, officiis voluptate aspernatur similique officia nihil exercitationem qui corporis iste assumenda eum quaerat? Porro amet repellat molestias eos iusto suscipit quos ex beatae aut voluptate deserunt dicta esse ullam ipsa nihil minima odio vitae, architecto totam, praesentium impedit excepturi ipsam.</p><p><br></p><h3>Process Story</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta et veniam omnis,
                            voluptatem qui dolorem nulla provident totam saepe, odit quibusdam dignissimos tempora
                            autem ut illo obcaecati ducimus sint repudiandae! Hic eos nam aperiam fugit?
                            Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum
                            quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus
                            a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem
                            similique deleniti inventore natus! Quaerat sit soluta enim at reiciendis?.</p>
                        <ul class="dots-list"><li>First refinement become it over a may an that harmonic every away.</li><li>Clarinet she or here, separated hides. With work a and so pay different chooses
                                answer.</li><li>Never analyzed the of bosss films death, heaven cache name any judgment, all.</li></ul>
                        <p>Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam
                            voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab
                            necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur
                            corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat
                            sit soluta .</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo animi libero suscipit
            praesentium perferendis possimus, ex dicta eius ea soluta sunt. Sapiente nulla,
            consequuntur ipsam saepe ad numquam blanditiis fugiat animi. Harum fugit incidunt
            nostrum eligendi doloremque vero possimus illum consequuntur quae sint officia
            repudiandae porro maxime cupiditate dolor magnam totam sit natus id neque quod.
            Molestias illo repudiandae laudantium illum perspiciatis nisi quasi amet corrupti
            .</p><p></p>';
        PortfolioItem::create([
            'image' => '/default/529652581mailchimp-mpwF3Mv2UaU-unsplash.jpg',
            'title' => 'Cloud Computing',
            'category_id' => 1,
            'description' => $description,
            'client' => 'Alireza',
            'website' => 'https://www.linkedin.com/in/alireza-mohammadi-7a60a0200/'
        ]);
        PortfolioItem::create([
            'image' => '/default/1212652849laura-chouette-ieSJS7kLESI-unsplash.jpg',
            'title' => 'Artificial Intelligence',
            'category_id' => 1,
            'description' => $description,
            'client' => 'Alireza',
            'website' => 'https://www.linkedin.com/in/alireza-mohammadi-7a60a0200/'
        ]);
        PortfolioItem::create([
            'image' => '/default/1044034077michal-kubalczyk-WecngmAT-KY-unsplash.jpg',
            'title' => 'Quantum Computing',
            'category_id' => 2,
            'description' => $description,
            'client' => 'Alireza',
            'website' => 'https://www.linkedin.com/in/alireza-mohammadi-7a60a0200/'
        ]);
        PortfolioItem::create([
            'image' => '/default/1844868390marvin-meyer-SYTO3xs06fU-unsplash.jpg',
            'title' => 'Data Analytics',
            'category_id' => 2,
            'description' => $description,
            'client' => 'Alireza',
            'website' => 'https://www.linkedin.com/in/alireza-mohammadi-7a60a0200/'
        ]);
        PortfolioItem::create([
            'image' => '/default/1349115194lorenzo-herrera-p0j-mE6mGo4-unsplash.jpg',
            'title' => 'Cyber Security',
            'category_id' => 3,
            'description' => $description,
            'client' => 'Alireza',
            'website' => 'https://www.linkedin.com/in/alireza-mohammadi-7a60a0200/'
        ]);
        PortfolioItem::create([
            'image' => '/default/1495690029annie-spratt-qyAka7W5uMY-unsplash.jpg',
            'title' => 'Blockchain Technology',
            'category_id' => 4,
            'description' => $description,
            'client' => 'Alireza',
            'website' => 'https://www.linkedin.com/in/alireza-mohammadi-7a60a0200/'
        ]);
        PortfolioItem::create([
            'image' => '/default/148773848domenico-loia-hGV2TfOh0ns-unsplashjpg730x490.jpg',
            'title' => 'Augmented Reality',
            'category_id' => 4,
            'description' => $description,
            'client' => 'Alireza',
            'website' => 'https://www.linkedin.com/in/alireza-mohammadi-7a60a0200/'
        ]);
        PortfolioItem::create([
            'image' => '/default/73107586christian-lue-7dEyTJ7-8os-unsplashjpg730x490.jpg',
            'title' => 'Virtual Reality',
            'category_id' => 2,
            'description' => $description,
            'client' => 'Alireza',
            'website' => 'https://www.linkedin.com/in/alireza-mohammadi-7a60a0200/'
        ]);
        PortfolioItem::create([
            'image' => '/default/337386151luca-bravo-XJXWbfSo2f0-unsplash.jpg',
            'title' => 'Machine Learning',
            'category_id' => 2,
            'description' => $description,
            'client' => 'Alireza',
            'website' => 'https://www.linkedin.com/in/alireza-mohammadi-7a60a0200/'
        ]);

        //portfolio section settings
        PortfolioSectionSetting::create([
            'title' => 'Latest Portfolio',
            'sub_title' => 'Earum quos animi numquam excepturi eveniet explicabo repellendus rem esse. Quae quasi odio enim.',
        ]);

        //seo setting
        SeoSetting::create([
            'title' => 'Alireza | Laravel Personal Portfolio',
            'description' => 'Obcaecati nisi tenet',
            'keywords' => 'Nesciunt delectus, fsadf',
        ]);

        //services
        Service::create([
            'name' => 'Branding Design',
            'description' => $description
        ]);
        Service::create([
            'name' => 'User Interface',
            'description' => $description
        ]);
        Service::create([
            'name' => 'User Experience',
            'description' => $description
        ]);

        //skill items
        SkillItem::create([
            'name' => 'Web Design',
            'percent' => 80,
        ]);
        SkillItem::create([
            'name' => 'Graphic Design',
            'percent' => 70,
        ]);
        SkillItem::create([
            'name' => 'Web Developement',
            'percent' => 90,
        ]);
        SkillItem::create([
            'name' => 'Application Development',
            'percent' => 60,
        ]);
        SkillItem::create([
            'name' => 'Analytical Abilities',
            'percent' => 50,
        ]);
        SkillItem::create([
            'name' => 'Problem Solbing',
            'percent' => 80,
        ]);

        //skill section setting
        SkillSectionSetting::create([
            'title' => 'Skills',
            'sub_title' => 'Earum quos animi numquam excepturi eveniet explicabo repellendus rem esse. Quae quasi odio enim.',
            'image' => '/default/1419509384skill.jpg'
        ]);

        //typer title
        TyperTitle::create(['title' => "Let's work together."]);
        TyperTitle::create(['title' => "I  can create awesome wbestie."]);
        TyperTitle::create(['title' => "I am a developer."]);
    }
}
