<?php
// Portfolio Website with PHP
$name = "Kang'ethe Brian Muchiri";
$title = "Research & Innovations | Renewable Energy Advocate";
$email = "Muchiribrianchiri@gmail.com";
$github = "https://github.com/mimi803";
$linkedin = "https://www.linkedin.com/in/muchiri-brian-4339b8248/";

// Add WhatsApp number variable
$whatsappNumber = "+254717350160";

$projects = [
    [
        'title' => "Eco Guardian System",
        'description' => "An AI-powered GIS waste management platform for Ruiru, Kenya.",
        'link' => "https://example.com/eco-guardian",
        'tags' => ["AI", "GIS", "Sustainability"]
    ],
    [
        'title' => "Bio-CNG Rural Station",
        'description' => "Biogas purification and storage prototype with DWSIM simulation.",
        'link' => "https://example.com/bio-cng",
        'tags' => ["Renewable Energy", "Biogas", "Simulation"]
    ],
    [
        'title' => "AI Sheng Translator",
        'description' => "A MongoDB-powered NLP platform for Sheng language detection and translation.",
        'link' => "https://example.com/sheng-translator",
        'tags' => ["NLP", "Machine Learning", "Language"]
    ]
];

$skills = [
    "Nature Conservation and Agriculture" => "bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-300",
    "Indigenous Knowledge and Seeds Bank Conservation" => "bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-300",
    "(MWMC) => Municipal Waste Management Center and Eco Guardian AI services" => "bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-300"
];

// Handle form submission
$formMessage = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nameInput = htmlspecialchars($_POST['name']);
    $emailInput = htmlspecialchars($_POST['email']);
    $messageInput = htmlspecialchars($_POST['message']);
    
    if (!empty($nameInput) && !empty($emailInput) && !empty($messageInput)) {
        // Send email to muchiribrianchiri@gmail.com
        $to = "muchiribrianchiri@gmail.com";
        $subject = "New message from portfolio website";
        $message = "Name: $nameInput\nEmail: $emailInput\n\nMessage:\n$messageInput";
        $headers = "From: $emailInput\r\nReply-To: $emailInput\r\n";
        mail($to, $subject, $message, $headers);
        
        $formMessage = "Thank you for your message, $nameInput! I'll get back to you soon.";
    } else {
        $formMessage = "Please fill in all required fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> | Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'fade-in': 'fadeIn 1s ease-out forwards'
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' }
                        },
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        }
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
   <link href="profile.css" rel="stylesheet">
</head>
<body class="min-h-screen">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-white/80 dark:bg-gray-900/80 backdrop-blur-sm py-4 shadow-sm">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <div>
                <a href="#" class="text-2xl font-bold text-blue-600 dark:text-blue-400"><?php echo $name; ?></a>
            </div>
            <div class="flex items-center space-x-6">
                <a href="#about" class="text-gray-700 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400 transition-colors">About</a>
                <a href="#projects" class="text-gray-700 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400 transition-colors">Projects</a>
                <a href="#resume" class="text-gray-700 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400 transition-colors">Resume</a>
                <a href="#contact" class="text-gray-700 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400 transition-colors">Contact</a>
                <button id="theme-toggle" class="p-2 rounded-full bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                    <i class="fas fa-moon dark:hidden"></i>
                    <i class="fas fa-sun hidden dark:block"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2 text-center md:text-left">
                    <h1 class="text-4xl sm:text-5xl font-bold mb-4 animate-fade-in">
                        Innovating for <span class="text-blue-600 dark:text-blue-400">Sustainable</span> Futures
                    </h1>
                    <p class="text-xl text-gray-700 dark:text-gray-300 mb-8 max-w-lg animate-fade-in animate-delay-100">
                        Creating technology solutions that empower communities and protect our environment
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 animate-fade-in animate-delay-200">
                        <a href="#projects" class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors shadow-lg hover:shadow-xl">
                            View Projects
                        </a>
                        <a href="#contact" class="px-6 py-3 bg-white dark:bg-gray-800 text-blue-600 dark:text-blue-400 font-medium rounded-lg border border-blue-200 dark:border-gray-700 hover:bg-blue-50 dark:hover:bg-gray-700 transition-colors">
                            Contact Me
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center animate-fade-in animate-delay-300">
                    <div class="relative">
                        <div class="w-64 h-64 bg-blue-500 rounded-full overflow-hidden shadow-xl">
                            <div class="w-full h-full bg-gradient-to-br from-blue-400 to-indigo-600 flex items-center justify-center">
                                <i class="fas fa-lightbulb text-6xl text-yellow-300"></i>
                            </div>
                        </div>
                        <div class="absolute -top-6 -right-6 w-32 h-32 bg-yellow-400 rounded-full flex items-center justify-center shadow-lg animate-float">
                            <i class="fas fa-solar-panel text-4xl text-white"></i>
                        </div>
                        <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-green-500 rounded-full flex items-center justify-center shadow-lg animate-float animate-delay-200">
                            <i class="fas fa-leaf text-3xl text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 px-4 sm:px-6 lg:px-8 bg-white dark:bg-gray-800">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold mb-12 text-center section-title animate-fade-in">About Me</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="animate-fade-in animate-delay-100 flex flex-col items-center md:items-start">
<img src="assets/IMG_0188.JPG" alt="Profile Image" class="profile-image rounded-full mb-6 object-cover shadow-lg">
                    <p class="text-lg text-gray-700 dark:text-gray-300 mb-6 leading-relaxed">
                        I am a young and vibrant innovator,software engineer,renewable energy engineer from Kenya's Mt. Kenya region, passionate about renewable energy technologies, sustainable waste management, and the intersection of AI and GIS in transforming local communities.
                    </p>
                    <p class="text-lg text-gray-700 dark:text-gray-300 mb-8 leading-relaxed">
                        My mission is to empower rural and urban communities through data-driven, human-centered innovations that create lasting positive impact on both people and the environment.
                    </p>
                    
            <div class="flex space-x-4">
                <a href="<?php echo $linkedin; ?>" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 hover:bg-blue-200 dark:hover:bg-blue-800/50 transition-colors">
                    <i class="fab fa-linkedin-in text-xl"></i>
                </a>
                <a href="<?php echo $github; ?>" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
                    <i class="fab fa-github text-xl"></i>
                </a>
                <a href="https://www.pinterest.com/Warmcuts/" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-full bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400 hover:bg-red-200 dark:hover:bg-red-800/50 transition-colors">
                    <i class="fab fa-pinterest text-xl"></i>
                </a>
                <a href="mailto:<?php echo $email; ?>" class="w-12 h-12 flex items-center justify-center rounded-full bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400 hover:bg-red-200 dark:hover:bg-red-800/50 transition-colors">
                    <i class="fas fa-envelope text-xl"></i>
                </a>
            </div>
                </div>
                
                <div class="animate-fade-in animate-delay-200">
                    <div class="bg-gray-100 dark:bg-gray-700 p-8 rounded-2xl">
                        <h3 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Areas of Expertise</h3>
                        <div class="flex flex-wrap gap-3 tag-cloud">
                            <?php foreach ($skills as $skill => $class): ?>
                                <span class="px-4 py-2 rounded-full text-sm font-medium <?php echo $class; ?>"><?php echo $skill; ?></span>
                            <?php endforeach; ?>
                        </div>
                        
                        <div class="mt-8">
                            <h3 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Education</h3>
                            <div class="space-y-4">
                                <div class="border-l-4 border-blue-500 pl-4 py-1">
                                    <h4 class="font-medium text-gray-800 dark:text-white">BSc. Information Technology</h4>
                                    <p class="text-gray-600 dark:text-gray-400">pioneer International University </p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">2018 - 2022</p>
                                </div>
                                <div class="border-l-4 border-green-500 pl-4 py-1">
                                    <h4 class="font-medium text-gray-800 dark:text-white">AI & Machine Learning Specialization</h4>
                                    <p class="text-gray-600 dark:text-gray-400">Coursera</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">2021</p>
                                </div>
                                  <div class="border-l-4 border-green-500 pl-4 py-1">
                                    <h4 class="font-medium text-gray-800 dark:text-white">Project Mangment </h4>
                                    <p class="text-gray-600 dark:text-gray-400">Coursera</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold mb-4 text-center section-title animate-fade-in">Featured Projects</h2>
            <p class="text-xl text-center text-gray-600 dark:text-gray-400 mb-12 max-w-2xl mx-auto animate-fade-in animate-delay-100">
                Explore my latest innovations and research projects
            </p>
            
            <div id="gallery" class="gallery mb-12 flex flex-wrap justify-center gap-6">
                <?php
                $mediaExtensions = ['jpg', 'jpeg', 'png', 'gif', 'mov', 'mp4', 'webm'];
                $mediaFiles = array_filter(scandir('assets'), function($file) use ($mediaExtensions) {
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    return in_array($ext, $mediaExtensions);
                });
                foreach ($mediaFiles as $file):
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    if (in_array($ext, ['mov', 'mp4', 'webm'])):
                ?>
                    <video class="gallery-video rounded-lg shadow-md" controls preload="metadata">
                        <?php
                        $mimeType = '';
                        if ($ext === 'mov') {
                            $mimeType = 'video/quicktime';
                        } else if ($ext === 'mp4') {
                            $mimeType = 'video/mp4';
                        } else if ($ext === 'webm') {
                            $mimeType = 'video/webm';
                        } else {
                            $mimeType = 'video/' . $ext;
                        }
                        ?>
                        <source src="assets/<?php echo htmlspecialchars($file); ?>" type="<?php echo $mimeType; ?>">
                        Your browser does not support the video tag.
                    </video>
                <?php else: ?>
                    <img src="assets/<?php echo htmlspecialchars($file); ?>" alt="Gallery Image" class="gallery-image rounded-lg shadow-md object-cover">
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach ($projects as $index => $project): ?>
                <div class="card-hover bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg animate-fade-in animate-delay-<?php echo ($index * 100) + 200; ?>">
                    <div class="p-6">
                        <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-600 dark:text-blue-400 mb-4">
                            <i class="fas fa-project-diagram text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2"><?php echo $project['title']; ?></h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4"><?php echo $project['description']; ?></p>
                        
                        <div class="flex flex-wrap gap-2 mb-6">
                            <?php foreach ($project['tags'] as $tag): ?>
                            <span class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-xs"><?php echo $tag; ?></span>
                            <?php endforeach; ?>
                        </div>
                        
                        <a href="<?php echo $project['link']; ?>" target="_blank" class="text-blue-600 dark:text-blue-400 font-medium hover:underline flex items-center">
                            View Project <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Resume Section -->
    <section id="resume" class="py-20 px-4 sm:px-6 lg:px-8 bg-white dark:bg-gray-800">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4 text-center section-title animate-fade-in">Professional Experience</h2>
            <p class="text-xl text-gray-600 dark:text-gray-400 mb-12 max-w-2xl mx-auto animate-fade-in animate-delay-100">
                Download my resume to learn more about my professional journey and qualifications
            </p>
            
            <div class="bg-gray-100 dark:bg-gray-700 rounded-2xl p-8 max-w-2xl mx-auto animate-fade-in animate-delay-200">
                <div class="flex flex-col md:flex-row items-center gap-8">
                   
                    <div class="text-left">
                        <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">Kang'ethe B Muchiri - Resume 2025</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">Detailed professional experience and qualifications</p>
<a href="assets/kangethe Brian Muchiri CV 2025.pdf" download class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors inline-flex items-center">
    <i class="fas fa-download mr-2"></i> Download CV
</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold mb-4 text-center section-title animate-fade-in">Get In Touch</h2>
            <p class="text-xl text-center text-gray-600 dark:text-gray-400 mb-12 max-w-2xl mx-auto animate-fade-in animate-delay-100">
                Have a project in mind? Feel free to reach out!
            </p>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg animate-fade-in animate-delay-200">
                    <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">Send me a message</h3>
                    
                    <?php if (!empty($formMessage)): ?>
                    <div class="mb-6 p-4 bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300 rounded-lg">
                        <?php echo $formMessage; ?>
                    </div>
                    <?php endif; ?>
                    
                    <form method="POST" action="#contact">
                        <div class="mb-6">
                            <label for="name" class="block text-gray-700 dark:text-gray-300 mb-2">Full Name</label>
                            <input type="text" id="name" name="name" required class="w-full px-4 py-3 border border-gray-300 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        </div>
                        
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 dark:text-gray-300 mb-2">Email Address</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        </div>
                        
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 dark:text-gray-300 mb-2">Your Message</label>
                            <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 border border-gray-300 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white"></textarea>
                        </div>
                        
                        <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors w-full">
                            Send Message
                        </button>
                    </form>
                </div>
                
                <div class="animate-fade-in animate-delay-300">
                    <div class="bg-gradient-to-br from-blue-600 to-indigo-700 rounded-2xl p-8 h-full text-white">
                        <h3 class="text-2xl font-bold mb-6">Contact Information</h3>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-bold text-lg">Location</h4>
                                    <p>Nairobi, Kenya</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-bold text-lg">Email</h4>
                                    <p><?php echo $email; ?></p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center flex-shrink-0">
                                    <i class="fab fa-github"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-bold text-lg">GitHub</h4>
                                    <p><?php echo str_replace('https://', '', $github); ?></p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center flex-shrink-0">
                                    <i class="fab fa-linkedin-in"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-bold text-lg">LinkedIn</h4>
                                    <p><?php echo str_replace('https://', '', $linkedin); ?></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-12">
                            <h4 class="font-bold text-lg mb-4">Follow Me</h4>
                            <div class="flex space-x-4">
                                <a href="<?php echo $linkedin; ?>" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-full bg-white/20 hover:bg-white/30 transition-colors">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="<?php echo $github; ?>" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-full bg-white/20 hover:bg-white/30 transition-colors">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="https://x.com/MuchiriBrian8" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-full bg-white/20 hover:bg-white/30 transition-colors">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.instagram.com/muchiribrianchiri/" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-full bg-white/20 hover:bg-white/30 transition-colors">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Research Section -->
    <section id="research" class="py-20 px-4 sm:px-6 lg:px-8 bg-white dark:bg-gray-800">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold mb-12 text-center section-title animate-fade-in">Research</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card-hover bg-white dark:bg-gray-700 rounded-2xl overflow-hidden shadow-lg p-6 animate-fade-in">
                    <div class="flex items-center mb-4">
                        <i class="fab fa-researchgate text-3xl text-green-600 dark:text-green-400 mr-3"></i>
                        <h3 class="text-xl font-semibold">ResearchGate Profile</h3>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 mb-4">
                        Explore my research contributions and publications on ResearchGate.
                    </p>
                    <a href="https://www.researchgate.net/profile/Kangethe-Brian?ev=hdr_xprf" target="_blank" class="text-blue-600 dark:text-blue-400 font-medium hover:underline">
                        Visit ResearchGate
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Post Section -->
    <section id="blog" class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold mb-12 text-center section-title animate-fade-in">Blog Post</h2>
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg animate-fade-in">
                <h3 class="text-xl font-semibold mb-4">Latest Insights on Sustainable Innovation</h3>
                <p class="text-gray-700 dark:text-gray-300 mb-6">
                    Stay tuned for my upcoming blog posts where I share insights, research findings, and stories about renewable energy, sustainability, and community impact.
                </p>
                <a href="#" class="text-blue-600 dark:text-blue-400 font-medium hover:underline">
                    Read More
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-10 bg-gray-100 dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <a href="#" class="text-2xl font-bold text-blue-600 dark:text-blue-400"><?php echo $name; ?></a>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">Innovating for a sustainable future</p>
                </div>
                
                <div class="flex space-x-6">
                    <a href="#about" class="text-gray-600 hover:text-blue-600 dark:text-gray-400 dark:hover:text-blue-400">About</a>
                    <a href="#projects" class="text-gray-600 hover:text-blue-600 dark:text-gray-400 dark:hover:text-blue-400">Projects</a>
                    <a href="#resume" class="text-gray-600 hover:text-blue-600 dark:text-gray-400 dark:hover:text-blue-400">Resume</a>
                    <a href="#contact" class="text-gray-600 hover:text-blue-600 dark:text-gray-400 dark:hover:text-blue-400">Contact</a>
                    <a href="#research" class="text-gray-600 hover:text-blue-600 dark:text-gray-400 dark:hover:text-blue-400">Research</a>
                    <a href="#blog" class="text-gray-600 hover:text-blue-600 dark:text-gray-400 dark:hover:text-blue-400">Blog Post</a>
                </div>
            </div>
            
            <div class="mt-8 pt-8 border-t border-gray-200 dark:border-gray-700 text-center text-gray-600 dark:text-gray-400">
                <p>© <?php echo date('Y'); ?> <?php echo $name; ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Dark mode toggle
        const themeToggle = document.getElementById('theme-toggle');
        const htmlElement = document.documentElement;
        
        // Check for saved theme preference or respect OS preference
        if (localStorage.getItem('theme') === 'dark' || 
            (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            htmlElement.classList.add('dark');
        }
        
        themeToggle.addEventListener('click', () => {
            htmlElement.classList.toggle('dark');
            localStorage.setItem('theme', htmlElement.classList.contains('dark') ? 'dark' : 'light');
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Animation on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        }, {
            threshold: 0.1
        });
        
        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });
    </script>
<!-- WhatsApp Floating Icon -->
<a href="https://wa.me/<?php echo $whatsappNumber; ?>" target="_blank" aria-label="Chat on WhatsApp" class="whatsapp-float">
    <i class="fab fa-whatsapp"></i>
</a>
</body>
</html>
