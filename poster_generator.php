<?php
$themes = [
    'classic' => [
        'name' => 'Classic Blue & Yellow',
        'description' => 'Traditional Facebook colors with a professional look',
        'bg' => '#FFE100',
        'primary' => '#000080',
        'accent' => '#FF0000',
        'text' => '#FFFFFF',
        'layout' => 'default',
        'icon' => 'fas fa-star'
    ],
    'modern' => [
        'name' => 'Modern Dark',
        'description' => 'Sleek dark theme with vibrant accents',
        'bg' => '#1A1A1A',
        'primary' => '#3498db',
        'accent' => '#e74c3c',
        'text' => '#FFFFFF',
        'layout' => 'centered',
        'icon' => 'fas fa-moon'
    ],
    'gradient' => [
        'name' => 'Gradient Purple',
        'description' => 'Smooth purple gradient with modern aesthetics',
        'bg' => 'linear-gradient(135deg, #667eea, #764ba2)',
        'primary' => '#2D3748',
        'accent' => '#F56565',
        'text' => '#FFFFFF',
        'layout' => 'stacked',
        'icon' => 'fas fa-palette'
    ],
    'neon' => [
        'name' => 'Neon Vibes',
        'description' => 'Bold neon effects with dark background',
        'bg' => '#000000',
        'primary' => '#00ff00',
        'accent' => '#ff00ff',
        'text' => '#FFFFFF',
        'layout' => 'modern',
        'icon' => 'fas fa-bolt'
    ],
    'sunset' => [
        'name' => 'Sunset Warm',
        'description' => 'Warm gradient colors with a cozy feel',
        'bg' => 'linear-gradient(135deg, #f6d365, #fda085)',
        'primary' => '#2D3748',
        'accent' => '#ED8936',
        'text' => '#1A202C',
        'layout' => 'warm',
        'icon' => 'fas fa-sun'
    ]
];

$templates = [
    'facebook_ad' => [
        'name' => 'Facebook Ad',
        'preview' => 'https://images.pexels.com/photos/1181686/pexels-photo-1181686.jpeg',
        'description' => 'Perfect for Facebook Ads campaigns',
        'category' => 'ads'
    ],
    'facebook_cover' => [
        'name' => 'Facebook Cover',
        'preview' => 'https://images.pexels.com/photos/7688336/pexels-photo-7688336.jpeg',
        'description' => 'Professional Facebook page cover',
        'category' => 'social'
    ],
    'instagram_post' => [
        'name' => 'Instagram Post',
        'preview' => 'https://images.pexels.com/photos/3856050/pexels-photo-3856050.jpeg',
        'description' => 'Square format for Instagram feed',
        'category' => 'social'
    ],
    'instagram_story' => [
        'name' => 'Instagram Story',
        'preview' => 'https://images.pexels.com/photos/5911224/pexels-photo-5911224.jpeg',
        'description' => 'Vertical format for Instagram stories',
        'category' => 'social'
    ],
    'linkedin_banner' => [
        'name' => 'LinkedIn Banner',
        'preview' => 'https://images.pexels.com/photos/1438081/pexels-photo-1438081.jpeg',
        'description' => 'Professional LinkedIn header',
        'category' => 'professional'
    ],
    'linkedin_post' => [
        'name' => 'LinkedIn Post',
        'preview' => 'https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg',
        'description' => 'Business-focused LinkedIn post',
        'category' => 'professional'
    ],
    'twitter_post' => [
        'name' => 'Twitter Post',
        'preview' => 'https://images.pexels.com/photos/3082341/pexels-photo-3082341.jpeg',
        'description' => 'Engaging Twitter/X posts',
        'category' => 'social'
    ],
    'youtube_thumbnail' => [
        'name' => 'YouTube Thumbnail',
        'preview' => 'https://images.pexels.com/photos/2510428/pexels-photo-2510428.jpeg',
        'description' => 'Eye-catching video thumbnails',
        'category' => 'video'
    ],
    'podcast_cover' => [
        'name' => 'Podcast Cover',
        'preview' => 'https://images.pexels.com/photos/3945313/pexels-photo-3945313.jpeg',
        'description' => 'Professional podcast artwork',
        'category' => 'audio'
    ],
    'blog_header' => [
        'name' => 'Blog Header',
        'preview' => 'https://images.pexels.com/photos/1591056/pexels-photo-1591056.jpeg',
        'description' => 'Engaging blog post headers',
        'category' => 'blog'
    ],
    'event_banner' => [
        'name' => 'Event Banner',
        'preview' => 'https://images.pexels.com/photos/1540406/pexels-photo-1540406.jpeg',
        'description' => 'Professional event promotion',
        'category' => 'events'
    ],
    'product_ad' => [
        'name' => 'Product Ad',
        'preview' => 'https://images.pexels.com/photos/5632402/pexels-photo-5632402.jpeg',
        'description' => 'Showcase your products',
        'category' => 'ads'
    ]
];

// Template categories for filtering
$categories = [
    'all' => 'All Templates',
    'social' => 'Social Media',
    'professional' => 'Professional',
    'ads' => 'Advertising',
    'video' => 'Video Content',
    'audio' => 'Audio Content',
    'blog' => 'Blog & Articles',
    'events' => 'Events'
];

$dimensions = [
    'facebook_ad' => ['width' => 1200, 'height' => 628],
    'facebook_cover' => ['width' => 1640, 'height' => 624],
    'instagram_post' => ['width' => 1080, 'height' => 1080],
    'instagram_story' => ['width' => 1080, 'height' => 1920],
    'linkedin_banner' => ['width' => 1584, 'height' => 396],
    'linkedin_post' => ['width' => 1200, 'height' => 627],
    'twitter_post' => ['width' => 1200, 'height' => 675],
    'youtube_thumbnail' => ['width' => 1280, 'height' => 720],
    'podcast_cover' => ['width' => 1400, 'height' => 1400],
    'blog_header' => ['width' => 1200, 'height' => 600],
    'event_banner' => ['width' => 1920, 'height' => 1080],
    'product_ad' => ['width' => 1200, 'height' => 1200]
];

$additionalFeatures = [
    'animations' => [
        'fade-in' => 'Fade In',
        'slide-up' => 'Slide Up',
        'bounce' => 'Bounce',
        'rotate' => 'Rotate',
        'pulse' => 'Pulse'
    ],
    'backgrounds' => [
        'pattern1' => 'Geometric Pattern',
        'pattern2' => 'Dots Pattern',
        'pattern3' => 'Wave Pattern',
        'pattern4' => 'Abstract Pattern'
    ],
    'filters' => [
        'none' => 'No Filter',
        'grayscale' => 'Grayscale',
        'sepia' => 'Sepia',
        'blur' => 'Blur Effect'
    ],
    'badges' => [
        'star' => 'Star Badge',
        'circle' => 'Circle Badge',
        'ribbon' => 'Ribbon Badge',
        'shield' => 'Shield Badge'
    ]
];

$selectedTemplate = isset($_GET['template']) ? $_GET['template'] : 'facebook_ad';
$selectedTheme = isset($_GET['theme']) ? $_GET['theme'] : 'classic';
$selectedAnimation = isset($_GET['animation']) ? $_GET['animation'] : 'fade-in';
$selectedBackground = isset($_GET['background']) ? $_GET['background'] : 'none';
$selectedFilter = isset($_GET['filter']) ? $_GET['filter'] : 'none';
$selectedBadge = isset($_GET['badge']) ? $_GET['badge'] : 'star';

$theme = $themes[$selectedTheme];
$layout = $theme['layout'];
$selectedDimension = $dimensions[$selectedTemplate];

// Handle file upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['template'])) {
    $uploadDir = 'uploads/';
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    
    $file = $_FILES['template'];
    $fileName = uniqid() . '_' . basename($file['name']);
    $targetPath = $uploadDir . $fileName;
    
    if (move_uploaded_file($file['tmp_name'], $targetPath)) {
        $templates['custom_' . uniqid()] = [
            'name' => 'Custom Template',
            'preview' => $targetPath,
            'description' => 'Your uploaded template'
        ];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Poster Generator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <meta name="theme-color" content="#FFE100">
    <link rel="manifest" href="manifest.json">
    <style>
        /* Mobile-first responsive design */
        @media (max-width: 768px) {
            .container {
                padding: 0;
            }
            
            .preview-container {
                margin: 0 -1rem;
                padding: 1rem;
                overflow-x: hidden;
            }

            #posterPreview {
                transform-origin: top center;
            }

            .feature-button {
                padding: 0.75rem 1rem;
            }

            .template-preview {
                aspect-ratio: auto;
                height: 200px;
            }
        }

        /* Touch-friendly controls */
        .touch-slider {
            -webkit-overflow-scrolling: touch;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
        }

        .touch-slider > * {
            scroll-snap-align: start;
        }

        /* Loading animation */
        .loading {
            position: fixed;
            inset: 0;
            background: rgba(255,255,255,0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 100;
        }

        .loading::after {
            content: '';
            width: 40px;
            height: 40px;
            border: 4px solid #f3f3f3;
            border-top: 4px solid var(--theme-primary);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Gesture hint */
        .gesture-hint {
            position: fixed;
            bottom: 80px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0,0,0,0.8);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.875rem;
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.3s;
            z-index: 60;
        }

        .gesture-hint.show {
            opacity: 1;
        }

        :root {
            --theme-bg: <?php echo $theme['bg']; ?>;
            --theme-primary: <?php echo $theme['primary']; ?>;
            --theme-accent: <?php echo $theme['accent']; ?>;
            --theme-text: <?php echo $theme['text']; ?>;
        }
        .theme-bg { background: var(--theme-bg); }
        .theme-primary { background: var(--theme-primary); }
        .theme-accent { background: var(--theme-accent); }
        .theme-text { color: var(--theme-text); }
        .theme-border { border-color: var(--theme-primary); }
        
        .feature-button {
            background: var(--theme-primary);
            transition: all 0.3s ease;
        }
        .feature-button:hover {
            transform: translateX(10px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        /* Animation Styles */
        .fade-in { animation: fadeIn 1s ease-in; }
        .slide-up { animation: slideUp 1s ease-out; }
        .bounce { animation: bounce 1s ease-in-out; }
        .rotate { animation: rotate 1s ease-in-out; }
        .pulse { animation: pulse 2s infinite; }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-30px); }
            60% { transform: translateY(-15px); }
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        /* Background Patterns */
        .pattern1 {
            background-image: linear-gradient(30deg, #ffffff 12%, transparent 12.5%, transparent 87%, #ffffff 87.5%, #ffffff),
            linear-gradient(150deg, #ffffff 12%, transparent 12.5%, transparent 87%, #ffffff 87.5%, #ffffff),
            linear-gradient(30deg, #ffffff 12%, transparent 12.5%, transparent 87%, #ffffff 87.5%, #ffffff),
            linear-gradient(150deg, #ffffff 12%, transparent 12.5%, transparent 87%, #ffffff 87.5%, #ffffff),
            linear-gradient(60deg, #ffffff77 25%, transparent 25.5%, transparent 75%, #ffffff77 75%, #ffffff77),
            linear-gradient(60deg, #ffffff77 25%, transparent 25.5%, transparent 75%, #ffffff77 75%, #ffffff77);
            background-size: 80px 140px;
            background-position: 0 0, 0 0, 40px 70px, 40px 70px, 0 0, 40px 70px;
        }

        .pattern2 {
            background-image: radial-gradient(#ffffff 10%, transparent 10%),
            radial-gradient(#ffffff 10%, transparent 10%);
            background-size: 30px 30px;
            background-position: 0 0, 15px 15px;
        }

        .pattern3 {
            background: linear-gradient(45deg, transparent 48%, #ffffff 48%, #ffffff 52%, transparent 52%);
            background-size: 30px 30px;
        }

        .pattern4 {
            background-image: linear-gradient(45deg, #ffffff 25%, transparent 25%),
            linear-gradient(-45deg, #ffffff 25%, transparent 25%),
            linear-gradient(45deg, transparent 75%, #ffffff 75%),
            linear-gradient(-45deg, transparent 75%, #ffffff 75%);
            background-size: 20px 20px;
            background-position: 0 0, 10px 0, 10px -10px, 0px 10px;
        }

        /* Badge Styles */
        .badge-star {
            clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
        }
        .badge-circle { border-radius: 50%; }
        .badge-ribbon {
            clip-path: polygon(0% 0%, 100% 0%, 100% 70%, 50% 100%, 0% 70%);
        }
        .badge-shield {
            clip-path: polygon(0% 0%, 100% 0%, 100% 75%, 50% 100%, 0% 75%);
        }

        /* Image Filters */
        .filter-grayscale { filter: grayscale(100%); }
        .filter-sepia { filter: sepia(100%); }
        .filter-blur { filter: blur(2px); }

        /* Template Preview */
        .template-preview {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            aspect-ratio: 16/9;
            background: #f8f9fa;
        }
        
        .template-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .template-preview:hover img {
            transform: scale(1.05);
        }

        .template-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0,0,0,0.7);
            color: white;
            padding: 1rem;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .template-preview:hover .template-info {
            transform: translateY(0);
        }

        /* Upload Zone */
        .upload-zone {
            border: 2px dashed #cbd5e0;
            transition: all 0.3s ease;
        }

        .upload-zone:hover {
            border-color: #4299e1;
            background: #ebf8ff;
        }

        .upload-zone.drag-over {
            border-color: #4299e1;
            background: #ebf8ff;
            transform: scale(1.02);
        }

        /* Preview Controls */
        .preview-controls {
            position: sticky;
            bottom: 1rem;
            background: white;
            padding: 1rem;
            border-radius: 0.5rem;
            box-shadow: 0 -4px 6px -1px rgba(0, 0, 0, 0.1);
            z-index: 50;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body class="font-poppins bg-gray-100 min-h-screen">
<!-- Mobile Menu Button -->
<div class="fixed top-4 right-4 z-50 md:hidden">
    <button id="mobileMenuBtn" class="bg-white p-2 rounded-lg shadow-lg">
        <i class="fas fa-bars text-2xl"></i>
    </button>
</div>

<!-- Mobile Navigation Menu -->
<div id="mobileMenu" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden md:hidden">
    <div class="bg-white h-full w-3/4 max-w-sm p-6 transform translate-x-full transition-transform duration-300">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-bold">Menu</h2>
            <button id="closeMobileMenu" class="p-2">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        <nav class="space-y-4">
            <a href="#templates" class="block p-2 hover:bg-gray-100 rounded">Templates</a>
            <a href="#themes" class="block p-2 hover:bg-gray-100 rounded">Themes</a>
            <a href="#features" class="block p-2 hover:bg-gray-100 rounded">Features</a>
            <a href="#preview" class="block p-2 hover:bg-gray-100 rounded">Preview</a>
        </nav>
    </div>
</div>

<div class="container mx-auto px-4 py-8">
    <!-- Quick Actions Bar -->
    <div class="fixed bottom-4 left-1/2 transform -translate-x-1/2 z-50 bg-white rounded-full shadow-lg p-2 flex gap-4 md:hidden">
        <button class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center" onclick="document.getElementById('templateUpload').click()">
            <i class="fas fa-upload"></i>
        </button>
        <button id="quickZoomOut" class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
            <i class="fas fa-search-minus"></i>
        </button>
        <button id="quickZoomIn" class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
            <i class="fas fa-search-plus"></i>
        </button>
        <button id="quickDownload" class="w-10 h-10 rounded-full bg-green-600 text-white flex items-center justify-center">
            <i class="fas fa-download"></i>
        </button>
    </div>
        <!-- Template Selector -->
        <div id="templates" class="bg-white rounded-lg shadow-lg p-6 mb-8 scroll-mt-20">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Choose Template</h2>
                <div class="flex gap-4">
                    <button onclick="document.getElementById('templateUpload').click()" 
                            class="flex items-center gap-2 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        <i class="fas fa-upload"></i>
                        Upload Template
                    </button>
                    <input type="file" id="templateUpload" accept="image/*" class="hidden">
                </div>
            </div>

            <!-- Template Categories -->
            <div class="mb-6 overflow-x-auto touch-slider">
                <div class="flex gap-4 pb-4">
                    <?php foreach ($categories as $key => $name): ?>
                    <button class="category-btn whitespace-nowrap px-4 py-2 rounded-full <?php echo (!isset($_GET['category']) && $key === 'all') || (isset($_GET['category']) && $_GET['category'] === $key) ? 'bg-blue-600 text-white' : 'bg-gray-100 hover:bg-gray-200'; ?>"
                            onclick="window.location.href = updateQueryStringParameter(window.location.href, 'category', '<?php echo $key; ?>')">
                        <?php echo $name; ?>
                    </button>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Template Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php 
                $selectedCategory = isset($_GET['category']) ? $_GET['category'] : 'all';
                foreach ($templates as $key => $template): 
                    if ($selectedCategory !== 'all' && $template['category'] !== $selectedCategory) continue;
                ?>
                <div class="template-preview cursor-pointer <?php echo $selectedTemplate === $key ? 'ring-2 ring-blue-500' : ''; ?>">
                    <a href="?template=<?php echo $key; ?>&theme=<?php echo $selectedTheme; ?>&animation=<?php echo $selectedAnimation; ?>&background=<?php echo $selectedBackground; ?>&filter=<?php echo $selectedFilter; ?>&badge=<?php echo $selectedBadge; ?>">
                        <img src="<?php echo $template['preview']; ?>" alt="<?php echo $template['name']; ?>">
                        <div class="template-info">
                            <h3 class="text-lg font-bold"><?php echo $template['name']; ?></h3>
                            <p class="text-sm opacity-75"><?php echo $template['description']; ?></p>
                            <p class="text-xs mt-1">
                                <?php echo $dimensions[$key]['width']; ?>x<?php echo $dimensions[$key]['height']; ?>px
                            </p>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Theme Selector -->
        <div id="themes" class="bg-white rounded-lg shadow-lg p-6 mb-8 scroll-mt-20">
            <h2 class="text-2xl font-bold mb-6">Choose Theme</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                <?php foreach ($themes as $key => $t): ?>
                <a href="?template=<?php echo $selectedTemplate; ?>&theme=<?php echo $key; ?>&animation=<?php echo $selectedAnimation; ?>&background=<?php echo $selectedBackground; ?>&filter=<?php echo $selectedFilter; ?>&badge=<?php echo $selectedBadge; ?>" 
                   class="block p-4 rounded-lg text-center transition-transform hover:scale-105 <?php echo $selectedTheme === $key ? 'ring-2 ring-blue-500' : ''; ?>"
                   style="background: <?php echo $t['bg']; ?>; color: <?php echo $t['text']; ?>">
                    <i class="<?php echo $t['icon']; ?> text-2xl mb-2"></i>
                    <h3 class="font-bold"><?php echo $t['name']; ?></h3>
                    <p class="text-sm opacity-75"><?php echo $t['description']; ?></p>
                </a>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Additional Features -->
        <div id="features" class="bg-white rounded-lg shadow-lg p-6 mb-8 scroll-mt-20">
            <h2 class="text-2xl font-bold mb-6">Additional Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Animation Selector -->
                <div>
                    <label class="block text-sm font-medium mb-2">Animation Effect</label>
                    <select id="animationSelect" class="w-full p-2 border rounded">
                        <?php foreach ($additionalFeatures['animations'] as $key => $value): ?>
                            <option value="<?php echo $key; ?>" <?php echo $selectedAnimation === $key ? 'selected' : ''; ?>>
                                <?php echo $value; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Background Pattern -->
                <div>
                    <label class="block text-sm font-medium mb-2">Background Pattern</label>
                    <select id="backgroundSelect" class="w-full p-2 border rounded">
                        <?php foreach ($additionalFeatures['backgrounds'] as $key => $value): ?>
                            <option value="<?php echo $key; ?>" <?php echo $selectedBackground === $key ? 'selected' : ''; ?>>
                                <?php echo $value; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Image Filter -->
                <div>
                    <label class="block text-sm font-medium mb-2">Image Filter</label>
                    <select id="filterSelect" class="w-full p-2 border rounded">
                        <?php foreach ($additionalFeatures['filters'] as $key => $value): ?>
                            <option value="<?php echo $key; ?>" <?php echo $selectedFilter === $key ? 'selected' : ''; ?>>
                                <?php echo $value; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Badge Style -->
                <div>
                    <label class="block text-sm font-medium mb-2">Badge Style</label>
                    <select id="badgeSelect" class="w-full p-2 border rounded">
                        <?php foreach ($additionalFeatures['badges'] as $key => $value): ?>
                            <option value="<?php echo $key; ?>" <?php echo $selectedBadge === $key ? 'selected' : ''; ?>>
                                <?php echo $value; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>

        <!-- Preview Section -->
        <div id="preview" class="preview-container scroll-mt-20">
            <div id="posterPreview" class="theme-bg p-8 rounded-lg shadow-xl <?php echo 'layout-'.$layout.' '.$selectedAnimation.' '.$selectedBackground; ?>"
                 style="width: <?php echo $selectedDimension['width']; ?>px; max-width: 100%; margin: 0 auto;">
                <div class="flex flex-col md:flex-row items-start justify-between gap-8">
                    <!-- Left Side Content -->
                    <div class="md:w-1/2 relative">
                        <!-- Badge -->
                        <div class="absolute -top-4 -left-2 z-20">
                            <div class="bg-white p-3 <?php echo 'badge-'.$selectedBadge; ?> shadow-lg">
                                <h2 id="previewBadge" class="text-3xl font-black leading-tight" style="color: var(--theme-accent)">
                                    Big<br>Sales
                                </h2>
                            </div>
                        </div>

                        <!-- Main Content -->
                        <div class="theme-primary rounded-[2rem] p-8 mt-12 relative z-10">
                            <h1 id="previewTitle" class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight theme-text">
                                Setup,<br>
                                Manage &<br>
                                Optimize
                            </h1>
                            
                            <div class="theme-accent rounded-xl px-6 py-3 transform rotate-2 inline-block mb-4 shadow-lg">
                                <span class="text-5xl md:text-6xl font-black text-white tracking-wide">
                                    FACEBOOK
                                </span>
                            </div>
                            
                            <div class="mt-4">
                                <span id="previewCampaign" class="text-3xl font-black theme-bg px-6 py-2 rounded-xl inline-block transform -rotate-1 shadow-md" 
                                      style="color: var(--theme-primary)">
                                    Ads Campaign
                                </span>
                            </div>
                        </div>

                        <!-- Features -->
                        <div id="previewFeatures" class="space-y-3 mt-6">
                            <!-- Features will be dynamically populated -->
                        </div>
                    </div>

                    <!-- Right Side Image -->
                    <div class="md:w-1/2">
                        <div class="relative">
                            <div class="absolute inset-0 theme-primary opacity-10 rounded-3xl"></div>
                            <img id="previewImage" 
                                 src="<?php echo $templates[$selectedTemplate]['preview']; ?>" 
                                 alt="Preview Image" 
                                 class="rounded-3xl shadow-2xl relative z-0 w-full h-auto object-cover <?php echo 'filter-'.$selectedFilter; ?>">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Preview Controls -->
            <div class="preview-controls mt-4">
                <div class="flex items-center gap-4">
                    <button id="zoomOut" class="p-2 rounded-full hover:bg-gray-100">
                        <i class="fas fa-search-minus"></i>
                    </button>
                    <input type="range" id="zoomRange" min="50" max="150" value="100" class="w-32">
                    <button id="zoomIn" class="p-2 rounded-full hover:bg-gray-100">
                        <i class="fas fa-search-plus"></i>
                    </button>
                </div>
                <div class="flex gap-4">
                    <button id="downloadBtn" class="flex items-center gap-2 bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition-colors">
                        <i class="fas fa-download"></i>
                        Download
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Loading Screen -->
    <div id="loading" class="loading"></div>

    <!-- Gesture Hint -->
    <div id="gestureHint" class="gesture-hint">
        Double tap to zoom • Pinch to adjust
    </div>

    <script>
        // Loading Screen
        window.addEventListener('load', () => {
            document.getElementById('loading').style.display = 'none';
            
            // Show gesture hint
            const gestureHint = document.getElementById('gestureHint');
            gestureHint.classList.add('show');
            setTimeout(() => {
                gestureHint.classList.remove('show');
            }, 3000);
        });

        // Save last used settings to localStorage
        function saveSettings() {
            const settings = {
                theme: '<?php echo $selectedTheme; ?>',
                animation: '<?php echo $selectedAnimation; ?>',
                background: '<?php echo $selectedBackground; ?>',
                filter: '<?php echo $selectedFilter; ?>',
                badge: '<?php echo $selectedBadge; ?>'
            };
            localStorage.setItem('posterSettings', JSON.stringify(settings));
        }

        // Load saved settings
        const savedSettings = localStorage.getItem('posterSettings');
        if (savedSettings) {
            const settings = JSON.parse(savedSettings);
            // Apply saved settings if not already set in URL
            if (!window.location.search.includes('theme=')) {
                window.location.href = updateQueryStringParameter(window.location.href, 'theme', settings.theme);
            }
        }

        // Swipe between sections on mobile
        let touchStartX = 0;
        let touchEndX = 0;
        
        document.addEventListener('touchstart', e => {
            touchStartX = e.changedTouches[0].screenX;
        });

        document.addEventListener('touchend', e => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });

        function handleSwipe() {
            const sections = ['templates', 'themes', 'features', 'preview'];
            const swipeThreshold = 50;
            const diff = touchEndX - touchStartX;
            
            if (Math.abs(diff) < swipeThreshold) return;

            const currentSection = sections.find(section => {
                const element = document.getElementById(section);
                const rect = element.getBoundingClientRect();
                return rect.top >= 0 && rect.top <= window.innerHeight;
            });

            const currentIndex = sections.indexOf(currentSection);
            let targetIndex;

            if (diff > 0 && currentIndex > 0) {
                // Swipe right - go to previous section
                targetIndex = currentIndex - 1;
            } else if (diff < 0 && currentIndex < sections.length - 1) {
                // Swipe left - go to next section
                targetIndex = currentIndex + 1;
            }

            if (targetIndex !== undefined) {
                document.getElementById(sections[targetIndex]).scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }

        // Vibration feedback for mobile
        function vibrateIfPossible(duration = 50) {
            if ('vibrate' in navigator) {
                navigator.vibrate(duration);
            }
        }

        // Add vibration to buttons
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', () => vibrateIfPossible());
        });

        // Add vibration to feature buttons
        document.querySelectorAll('.feature-button').forEach(button => {
            button.addEventListener('touchstart', () => vibrateIfPossible(20));
        });

        // Mobile Menu Functionality
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const closeMobileMenu = document.getElementById('closeMobileMenu');
        const menuContent = mobileMenu.querySelector('div');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('hidden');
            setTimeout(() => {
                menuContent.classList.remove('translate-x-full');
            }, 10);
        });

        function closeMobileMenuFn() {
            menuContent.classList.add('translate-x-full');
            setTimeout(() => {
                mobileMenu.classList.add('hidden');
            }, 300);
        }

        closeMobileMenu.addEventListener('click', closeMobileMenuFn);
        mobileMenu.addEventListener('click', (e) => {
            if (e.target === mobileMenu) {
                closeMobileMenuFn();
            }
        });

        // Smooth Scrolling for Mobile Menu Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                closeMobileMenuFn();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Quick Action Buttons
        document.getElementById('quickZoomIn').addEventListener('click', () => {
            zoomIn.click();
        });

        document.getElementById('quickZoomOut').addEventListener('click', () => {
            zoomOut.click();
        });

        document.getElementById('quickDownload').addEventListener('click', () => {
            document.getElementById('downloadBtn').click();
        });

        // Double Tap to Zoom on Mobile
        let lastTap = 0;
        document.getElementById('posterPreview').addEventListener('touchend', function(e) {
            const currentTime = new Date().getTime();
            const tapLength = currentTime - lastTap;
            if (tapLength < 500 && tapLength > 0) {
                const currentZoom = parseInt(zoomRange.value);
                if (currentZoom < 150) {
                    zoomRange.value = Math.min(150, currentZoom + 25);
                } else {
                    zoomRange.value = 100;
                }
                zoomRange.dispatchEvent(new Event('input'));
                e.preventDefault();
            }
            lastTap = currentTime;
        });

        // Pinch to Zoom
        let initialDistance = 0;
        document.getElementById('posterPreview').addEventListener('touchstart', function(e) {
            if (e.touches.length === 2) {
                initialDistance = Math.hypot(
                    e.touches[0].pageX - e.touches[1].pageX,
                    e.touches[0].pageY - e.touches[1].pageY
                );
            }
        });

        document.getElementById('posterPreview').addEventListener('touchmove', function(e) {
            if (e.touches.length === 2) {
                const currentDistance = Math.hypot(
                    e.touches[0].pageX - e.touches[1].pageX,
                    e.touches[0].pageY - e.touches[1].pageY
                );
                
                const difference = currentDistance - initialDistance;
                const currentZoom = parseInt(zoomRange.value);
                const newZoom = Math.max(50, Math.min(150, currentZoom + difference / 5));
                
                zoomRange.value = newZoom;
                zoomRange.dispatchEvent(new Event('input'));
                initialDistance = currentDistance;
                e.preventDefault();
            }
        });

        // Feature selectors
        document.getElementById('animationSelect').addEventListener('change', function(e) {
            window.location.href = updateQueryStringParameter(window.location.href, 'animation', e.target.value);
        });

        document.getElementById('backgroundSelect').addEventListener('change', function(e) {
            window.location.href = updateQueryStringParameter(window.location.href, 'background', e.target.value);
        });

        document.getElementById('filterSelect').addEventListener('change', function(e) {
            window.location.href = updateQueryStringParameter(window.location.href, 'filter', e.target.value);
        });

        document.getElementById('badgeSelect').addEventListener('change', function(e) {
            window.location.href = updateQueryStringParameter(window.location.href, 'badge', e.target.value);
        });

        // Helper function to update URL parameters
        function updateQueryStringParameter(uri, key, value) {
            var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
            var separator = uri.indexOf('?') !== -1 ? "&" : "?";
            if (uri.match(re)) {
                return uri.replace(re, '$1' + key + "=" + value + '$2');
            }
            else {
                return uri + separator + key + "=" + value;
            }
        }

        // Download functionality
        document.getElementById('downloadBtn').addEventListener('click', function() {
            html2canvas(document.getElementById('posterPreview')).then(canvas => {
                const link = document.createElement('a');
                link.download = 'social-media-poster.png';
                link.href = canvas.toDataURL('image/png');
                link.click();
            });
        });

        // Zoom Controls
        const preview = document.getElementById('posterPreview');
        const zoomRange = document.getElementById('zoomRange');
        const zoomOut = document.getElementById('zoomOut');
        const zoomIn = document.getElementById('zoomIn');

        zoomRange.addEventListener('input', function() {
            preview.style.transform = `scale(${this.value / 100})`;
        });

        zoomOut.addEventListener('click', function() {
            zoomRange.value = Math.max(50, parseInt(zoomRange.value) - 10);
            zoomRange.dispatchEvent(new Event('input'));
        });

        zoomIn.addEventListener('click', function() {
            zoomRange.value = Math.min(150, parseInt(zoomRange.value) + 10);
            zoomRange.dispatchEvent(new Event('input'));
        });

        // Initialize features
        const features = [
            { text: 'Audience Research', icon: 'users' },
            { text: 'Pixel & Event Setup', icon: 'code' },
            { text: 'Sales Funnel Creation', icon: 'funnel-dollar' },
            { text: 'Boost Sales & Leads', icon: 'chart-line' }
        ];

        const featuresContainer = document.getElementById('previewFeatures');
        features.forEach(feature => {
            featuresContainer.innerHTML += `
                <div class="feature-button text-white rounded-full py-4 px-8 flex items-center gap-4">
                    <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                        <i class="fas fa-${feature.icon}" style="color: var(--theme-primary)"></i>
                    </div>
                    <span class="text-xl font-bold">${feature.text}</span>
                </div>
            `;
        });
    </script>
</body>
</html>
