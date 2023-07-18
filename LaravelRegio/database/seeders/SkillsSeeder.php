<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skills;

class SkillsSeeder extends Seeder
{
    public function run()
    {
        $skills = [
            '.NET',
            '360-degree video',
            '3D Animation',
            '3D Design',
            '3D Model Maker',
            '3D Modelling',
            '3D Printing',
            '3D Rendering',
            '3ds Max',
            '4D',
            'Academic Writing',
            'Accounting',
            'ActionScript',
            'Active Directory',
            'Ad Planning / Buying',
            'Adobe Air',
            'Adobe Captivate',
            'Adobe Dreamweaver',
            'Adobe Fireworks',
            'Adobe Flash',
            'Adobe InDesign',
            'Adobe Lightroom',
            'Adobe LiveCycle Designer',
            'Adobe Premiere Pro',
            'Advertisement Design',
            'Advertising',
            'Aeronautical Engineering',
            'Aerospace Engineering',
            'Affiliate Marketing',
            'Afrikaans',
            'After Effects',
            'Agile Development',
            'Agronomy',
            'Air Conditioning',
            'Airbnb',
            'AJAX',
            'Albanian',
            'Algorithm',
            'Alibaba',
            'Amazon Fire',
            'Amazon Kindle',
            'Amazon Web Services',
            'AMQP',
            'Analytics',
            'Android',
            'Android Honeycomb',
            'Android Wear SDK',
            'Angular.js',
            'Animation',
            'Antenna Services',
            'Anything Goes',
            'Apache',
            'Apache Ant',
            'Apache Solr',
            'App Designer',
            'App Developer',
            'Appcelerator Titanium',
            'Apple Compressor',
            'Apple iBooks Author',
            'Apple Logic Pro',
            'Apple Motion',
            'Apple Safari',
            'Apple Watch',
            'Applescript',
            'Appliance Installation',
            'Appliance Repair',
            'Arabic',
            'Arduino',
            'Argus Monitoring Software',
            'Article Rewriting',
            'Article Submission',
            'Articles',
            'Artificial Intelligence',
            'Arts / Crafts',
            'AS400 / iSeries',
            'Asbestos Removal',
            'ASP',
            'ASP.NET',
            'Asphalt',
            'Assembly',
            'Asterisk PBX',
            'Astrophysics',
            'Attic Access Ladders',
            'Attorney',
            'Audio Production',
            'Audio Services',
            'Audit',
            'Augmented Reality',
            'AutoCAD',
            'Autodesk Inventor',
            'Autodesk Revit',
            'AutoHotkey',
            'Automotive',
            'Autotask',
            'Awnings',
            'Axure',
            'Azure',
            'backbone.js',
            'Balsamiq',
            'Balustrading',
            'Bamboo Flooring',
            'Banner Design',
            'Basque',
            'Bathroom',
            'Bengali',
            'Big Data',
            'BigCommerce',
            'Binary Analysis',
            'Biology',
            'Biotechnology',
            'Bitcoin',
            'Biztalk',
            'Blackberry',
            'Blog',
            'Blog Design',
            'Blog Install',
            'Bluetooth Low Energy (BLE)',
            'BMC Remedy',
            'Book Artist',
            'Book Writing',
            'Bookkeeping',
            'Boonex Dolphin',
            'Bootstrap',
            'Bosnian',
            'Bower',
            'BPO',
            'Brackets',
            'Brain Storming',
            'Branding',
            'Bricklaying',
            'Broadcast Engineering',
            'Brochure Design',
            'BSD',
            'Building',
            'Building Architecture',
            'Building Certifiers',
            'Building Consultants',
            'Building Designer',
            'Building Surveyors',
            'Bulgarian',
            'Bulk Marketing',
            'Business Analysis',
            'Business Cards',
            'Business Catalyst',
            'Business Coaching',
            'Business Intelligence',
            'Business Plans',
            'Business Writing',
            'Buyer Sourcing',
            'C Programming',
            'C# Programming',
            'C++ Programming',
            'CAD/CAM',
            'CakePHP',
            'Call Center',
            'Call Control XML',
            'Capture NX2',
            'Caricature / Cartoons',
            'Carpentry',
            'Carpet Repair / Laying',
            'Carports',
            'Cartography / Maps',
            'Carwashing',
            'CasperJS',
            'Cassandra',
            'Catalan',
            'Catch Phrases',
            'CATIA',
            'Ceilings',
            'Cement Bonding Agents',
            'CGI',
            'Chef Configuration Management',
            'Chemical Engineering',
            'Chordiant',
            'Christmas',
            'Chrome OS',
            'Cinema 4D',
            'Circuit Design',
            'Cisco',
            'Civil Engineering',
            'Classifieds Posting',
            'Clean Technology',
            'Cleaning Carpet',
            'Cleaning Domestic',
            'Cleaning Upholstery',
            'Climate Sciences',
            'CLIPS',
            'Clothesline',
            'Cloud Computing',
            'CMS',
            'Coating Materials',
            'COBOL',
            'Cocoa',
            'Codeigniter',
            'Coding',
            'Cold Fusion',
            'Columns',
            'Commercial Cleaning',
            'Commercials',
            'Communications',
            'Compliance',
            'Computer Graphics',
            'Computer Help',
            'Computer Security',
            'Concept Art',
            'Concept Design',
            'Concreting',
            'Construction Monitoring',
            'Content Writing',
            'Contracts',
            'Conversion Rate Optimisation',
            'Cooking / Recipes',
            'Cooking / Baking',
            'Copy Typing',
            'Copywriting',
            'Corporate Identity',
            'Courses',
            'Covers / Packaging',
            'CRE Loaded',
            'Creative Design',
            'Creative Writing',
            'CRM',
            'Croatian',
            'Cryptography',
            'Crystal Reports',
            'CS-Cart',
            'CSS',
            'CubeCart',
            'CUDA',
            'Customer Service',
            'Customer Support',
            'Czech',
            'Damp Proofing',
            'Danish',
            'Dari',
            'Dart',
            'Data Entry',
            'Data Mining',
            'Data Processing',
            'Data Science',
            'Data Warehousing',
            'Database Administration',
            'Database Development',
            'Database Programming',
            'DataLife Engine',
            'Dating',
            'DDS',
            'Debian',
            'Debugging',
            'Decking',
            'Decoration',
            'Delivery',
            'Delphi',
            'Demolition',
            'Design',
            'Desktop Support',
            'Digital Design',
            'Disposals',
            'Django',
            'DNS',
            'DOS',
            'DotNetNuke',
            'Drafting',
            'Drains',
            'Drones',
            'Drupal',
            'Dthreejs',
            'Dutch',
            'Dynamics',
            'eBay',
            'eBooks',
            'eCommerce',
            'Editing',
            'Education / Tutoring',
            'edX',
            'Elasticsearch',
            'eLearning',
            'eLearning Designer',
            'Electrical Engineering',
            'Electricians',
            'Electronic Forms',
            'Electronics',
            'Email Developer',
            'Email Handling',
            'Email Marketing',
            'Embedded Software',
            'Ember.js',
            'Employment Law',
            'Energy',
            'Engineering',
            'Engineering Drawing',
            'English (UK)',
            'English (US)',
            'English Grammar',
            'English Spelling',
            'Entrepreneurship',
            'ePub',
            'Equipment Hire',
            'Erlang',
            'ERP',
            'Estonian',
            'Etsy',
            'Event Planning',
            'Event Staffing',
            'Excavation',
            'Excel',
            'Express JS',
            'Expression Engine',
            'Extensions / Additions',
            'Face Recognition',
            'Facebook Marketing',
            'Fashion Design',
            'Fashion Modeling',
            'Fencing',
            'Feng Shui',
            'Fiction',
            'FileMaker',
            'Filipino',
            'Filmmaking',
            'Final Cut Pro',
            'Finale / Sibelius',
            'Finance',
            'Financial Analysis',
            'Financial Markets',
            'Financial Planning',
            'Financial Research',
            'Finite Element Analysis',
            'Finnish',
            'Firefox',
            'Flash 3D',
            'Flashmob',
            'Flex',
            'Floor Coatings',
            'Flooring',
            'Flow Charts',
            'Flyer Design',
            'Flyscreens',
            'Food Takeaway',
            'Format / Layout',
            'Fortran',
            'Forum Posting',
            'Forum Software',
            'FPGA',
            'Frames / Trusses',
            'Freelance',
            'FreelancerAPI',
            'FreeSwitch',
            'French',
            'French (Canadian)',
            'Fundraising',
            'Furniture Assembly',
            'Furniture Design',
            'Game Consoles',
            'Game Design',
            'Game Development',
            'GameSalad',
            'Gamification',
            'GarageBand',
            'Gardening',
            'Gas Fitting',
            'Genealogy',
            'General Labor',
            'General Office',
            'Genetic Engineering',
            'Geolocation',
            'Geology',
            'Geospatial',
            'Geotechnical Engineering',
            'German',
            'Ghostwriting',
            'GIMP',
            'Git',
            'Glass / Mirror / Glazing',
            'Golang',
            'Google Adsense',
            'Google Adwords',
            'Google Analytics',
            'Google App Engine',
            'Google Cardboard',
            'Google Chrome',
            'Google Cloud Storage',
            'Google Earth',
            'Google Maps API',
            'Google Plus',
            'Google SketchUp',
            'Google Web Toolkit',
            'Google Webmaster Tools',
            'Google Website Optimizer',
            'GoPro',
            'GPGPU',
            'GPS',
            'Grails',
            'Grant Writing',
            'Graphic Design',
            'Grease Monkey',
            'Greek',
            'Growth Hacking',
            'Grunt',
            'Guttering',
            'Hadoop',
            'Hair Styles',
            'Handyman',
            'Haskell',
            'HBase',
            'Health',
            'Heating Systems',
            'Hebrew',
            'Helpdesk',
            'Heroku',
            'Hindi',
            'Hire me',
            'History',
            'Hive',
            'Home Automation',
            'Home Design',
            'Home Organization',
            'HomeKit',
            'Hot Water',
            'House Cleaning',
            'Housework',
            'HP Openview',
            'HTML',
            'HTML5',
            'Human Resources',
            'Human Sciences',
            'Hungarian',
            'iBeacon',
            'IBM BPM',
            'IBM Tivoli',
            'IBM Websphere Transformation Tool',
            'Icon Design',
            'IIS',
            'IKEA Installation',
            'Illustration',
            'Illustrator',
            'Imaging',
            'iMovie',
            'Indonesian',
            'Industrial Design',
            'Industrial Engineering',
            'Infographics',
            'Inspections',
            'Instagram',
            'Installation',
            'Instrumentation',
            'Insurance',
            'Interior Design',
            'Interiors',
            'Internet Marketing',
            'Internet Research',
            'Internet Security',
            'Interpreter',
            'Interspire',
            'Intuit QuickBooks',
            'Inventory Management',
            'Investment Research',
            'Invitation Design',
            'Ionic Framework',
            'iPad',
            'iPhone',
            'ISO9001',
            'Italian',
            'ITIL',
            'J2EE',
            'J2ME',
            'Jabber',
            'Japanese',
            'Java',
            'JavaFX',
            'Javascript',
            'JD Edwards CNC',
            'JDF',
            'Jewellery',
            'Joomla',
            'Journalist',
            'jQuery / Prototype',
            'JSON',
            'JSP',
            'Kannada',
            'Kinect',
            'Kitchen',
            'Knockout.js',
            'Korean',
            'Label Design',
            'LabVIEW',
            'Landing Pages',
            'Landscape Design',
            'Landscaping',
            'Landscaping / Gardening',
            'Laravel',
            'LaTeX',
            'Latvian',
            'Laundry and Ironing',
            'Lawn Mowing',
            'Leads',
            'Leap Motion SDK',
            'Legal',
            'Legal Research',
            'Legal Writing',
            'LESS/Sass/SCSS',
            'Life Coaching',
            'Lighting',
            'Linear Programming',
            'Link Building',
            'Linkedin',
            'Linnworks Order Management',
            'LINQ',
            'Linux',
            'Lisp',
            'Lithuanian',
            'LiveCode',
            'Locksmith',
            'Logistics / Shipping',
            'Logo Design',
            'Lotus Notes',
            'Lua',
            'Mac OS',
            'Macedonian',
            'Machine Learning',
            'Magento',
            'Magic Leap',
            'Mailchimp',
            'Mailwizz',
            'Make Up',
            'Makerbot',
            'Malay',
            'Malayalam',
            'Maltese',
            'Management',
            'Manufacturing',
            'Manufacturing Design',
            'Map Reduce',
            'MariaDB',
            'Market Research',
            'Marketing',
            'Marketplace Service',
            'Materials Engineering',
            'Mathematics',
            'Matlab and Mathematica',
            'Maya',
            'Mechanical Engineering',
            'Mechatronics',
            'Medical',
            'Medical Writing',
            'Metatrader',
            'MeteorJS',
            'Metro',
            'Microbiology',
            'Microcontroller',
            'Microsoft',
            'Microsoft Access',
            'Microsoft Exchange',
            'Microsoft Expression',
            'Microsoft Hololens',
            'Microsoft Office',
            'Microsoft Outlook',
            'Microsoft SQL Server',
            'Microsoft Visio',
            'Microstation',
            'Millwork',
            'Mining Engineering',
            'Minitlab',
            'MLM',
            'MMORPG',
            'Mobile App Testing',
            'Mobile Phone',
            'MODx',
            'MonetDB',
            'Moodle',
            'Mortgage Brokering',
            'Motion Graphics',
            'Moving',
            'MQTT',
            'Mural Painting',
            'Music',
            'MVC',
            'MYOB',
            'MySpace',
            'MySQL',
            'Nanotechnology',
            'Natural Language',
            'Network Administration',
            'Newsletters',
            'Nginx',
            'Ning',
            'Nintex Forms',
            'Nintex Workflow',
            'node.js',
            'Nokia',
            'Norwegian',
            'NoSQL Couch / Mongo',
            'Nutrition',
            'OAuth',
            'Objective C',
            'OCR',
            'Oculus Mobile SDK',
            'Odoo',
            'Online Writing',
            'Open Cart',
            'Open Journal Systems',
            'OpenBravo',
            'OpenCL',
            'OpenGL',
            'OpenSSL',
            'OpenStack',
            'OpenVMS',
            'Oracle',
            'Order Processing',
            'Organizational Change Management',
            'OSCommerce',
            'Package Design',
            'Packing / Shipping',
            'Painting',
            'Palm',
            'Papiamento',
            'Parallax Scrolling',
            'Parallel Processing',
            'Parallels Automation',
            'Parallels Desktop',
            'Patents',
            'Pattern Making',
            'Pattern Matching',
            'Pavement',
            'PayPal API',
            'Payroll',
            'Paytrace',
            'PCB Layout',
            'PDF',
            'PEGA PRPC',
            'PencilBlue CMS',
            'Pentaho',
            'PeopleSoft',
            'Periscope',
            'Perl',
            'Personal Development',
            'Pest Control',
            'Pet Sitting',
            'Petroleum Engineering',
            'Phone Support',
            'PhoneGap',
            'Photo Editing',
            'Photography',
            'Photoshop',
            'Photoshop Coding',
            'Photoshop Design',
            'PHP',
            'Physics',
            'PICK Multivalue DB',
            'Pickup',
            'Pinterest',
            'Piping',
            'PLC / SCADA',
            'Plesk',
            'Plugin',
            'Plumbing',
            'Poet',
            'Poetry',
            'Polish',
            'Portuguese',
            'Portuguese (Brazil)',
            'Post-Production',
            'Poster Design',
            'PostgreSQL',
            'Powerpoint',
            'Powershell',
            'Pre-production',
            'Presentations',
            'Press Releases',
            'Prestashop',
            'Prezi',
            'Print',
            'Procurement',
            'Product Descriptions',
            'Product Design',
            'Product Management',
            'Product Sourcing',
            'Programming',
            'Project Management',
            'Project Scheduling',
            'Prolog',
            'Proofreading',
            'Property Development',
            'Property Law',
            'Property Management',
            'Proposal/Bid Writing',
            'Protoshare',
            'PSD to HTML',
            'PSD2CMS',
            'Psychology',
            'Public Relations',
            'Publishing',
            'Punjabi',
            'Puppet',
            'Python',
            'QlikView',
            'Qualtrics Survey Platform',
            'Quantum',
            'QuarkXPress',
            'QuickBase',
            'R Programming Language',
            'RapidWeaver',
            'Raspberry Pi',
            'Ray-tracing',
            'React.js',
            'Real Estate',
            'REALbasic',
            'Recruitment',
            'Red Hat',
            'Redis',
            'Redshift',
            'Regular Expressions',
            'Remote Sensing',
            'Removalist',
            'Renewable Energy Design',
            'Report Writing',
            'Research',
            'RESTful',
            'Resumes',
            'Reviews',
            'Risk Management',
            'Robotics',
            'Rocket Engine',
            'Romanian',
            'Roofing',
            'RTOS',
            'Ruby',
            'Ruby on Rails',
            'Russian',
            'RWD',
            'Sales',
            'Salesforce App Development',
            'Salesforce.com',
            'Samsung',
            'Samsung Accessory SDK',
            'SAP',
            'SAS',
            'Scala',
            'Scheme',
            'Scientific Research',
            'Screenwriting',
            'Script Install',
            'Scrum',
            'Scrum Development',
            'Sculpturing',
            'Search Engine Marketing',
            'Sencha / YahooUI',
            'SEO',
            'Serbian',
            'Sewing',
            'Sharepoint',
            'Shell Script',
            'Shopify',
            'Shopping',
            'Shopping Carts',
            'Short Stories',
            'Siebel',
            'Silverlight',
            'Sinhala',
            'Simplified Chinese (China)',
            'Simplified Chinese (Hong Kong)',
            'Simplified Chinese (Singapore)',
            'Sketch',
            'Skills Training',
            'Slovakian',
            'Smarty PHP',
            'Social Engine',
            'Social Media Marketing',
            'Social Networking',
            'Socket IO',
            'Software Architecture',
            'Software Development',
            'Software Testing',
            'Solaris',
            'Solidworks',
            'Sound Design',
            'Spanish',
            'Spanish (Spain)',
            'Spanish (United States)',
            'Spatial Analysis',
            'Speed Reading',
            'Speech Writing',
            'Splunk',
            'Sponsorship',
            'Sports',
            'SQL',
            'SQL Server',
            'SQLite',
            'Squarespace',
            'SSIS (SQL Server Integration Services)',
            'SSL',
            'Stair Lifts',
            'Standard Edition',
            'Stata',
            'Statistics',
            'Steam API',
            'Sticker Design',
            'Storyboard',
            'Structural Engineering',
            'Structural Monitoring',
            'SugarCRM',
            'Supplier Sourcing',
            'Support',
            'SurveyMonkey',
            'Sustainable Energy',
            'Swift',
            'Swing (Java)',
            'Swedish',
            'Swimming Pool',
            'Symfony PHP',
            'System Admin',
            'T-Shirts',
            'Tableau',
            'Tamil',
            'TaoBao API',
            'Tapestry',
            'Tattoo Design',
            'Tax',
            'Tax Law',
            'Taxi',
            'Technical Documentation',
            'Technical Support',
            'Technical Writing',
            'Telecommunications Engineering',
            'Telemarketing',
            'Template Design',
            'Templates',
            'Testing / QA',
            'Textile Engineering',
            'Thai',
            'Tiling',
            'Time Management',
            'Tizen SDK for Wearables',
            'TLS',
            'To capture data from the web',
            'To get traffic',
            'Tomcat',
            'Torch',
            'Tourism',
            'Trademarks',
            'Training',
            'Translation',
            'Travel Writing',
            'Troubleshooting',
            'Tshirt Design',
            'Tumblr',
            'Turkish',
            'Twitter',
            'Twitter API',
            'TypeScript',
            'TYPO3',
            'Ubercart',
            'Ukrainian',
            'UMTS',
            'Unbounce Templates',
            'Undertaking/supervision of remediation projects',
            'Unity 3D',
            'UNIX',
            'Usability Testing',
            'User Experience Design',
            'User Interface / IA',
            'Vagrant',
            'Valuation & Appraisal',
            'vBulletin',
            'VB.NET',
            'vC++ Programming',
            'Vectorization',
            'Vehicle Signage',
            'vTiger',
            'Vue.js',
            'Vuforia',
            'vTuning',
            'Waste Management',
            'WatchKit',
            'Waterproofing',
            'Web Hosting',
            'Web Scraping',
            'Web Search',
            'Web Security',
            'Web Services',
            'WebOS',
            'Weebly',
            'Weighing Scales',
            'Weixin API',
            'Welding',
            'Wikipedia',
            'Windows 8',
            'Windows API',
            'Windows Desktop',
            'Windows Mobile',
            'Windows Phone',
            'Windows Server',
            'Wireframes',
            'Wix',
            'Wolfram',
            'Word',
            'Word Processing',
            'WooCommerce',
            'WordPress',
            'WPF',
            'WSDL',
            'X11',
            'Xamarin',
            'Xero',
            'XML',
            'XMPP',
            'XSLT',
            'Yii',
            'Youtube',
            'Zend',
            'Zendesk',
            'Zoho'
        ];

        foreach ($skills as $skill) {
            Skills::create(['skill_name' => $skill]);
        }
    }
}
