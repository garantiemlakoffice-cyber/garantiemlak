<?php 
include 'header.php';

// Oturum açık ise (Admin) düzenle butonlarını göster
session_start();
$isAdmin = isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
?>

<header class="bg-[var(--ana-yesil)] text-white py-20 px-6 text-center animate__animated animate__fadeIn">
    <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Tarsus'ta Güvenli Gelecek</h1>
    <p class="text-lg opacity-90 max-w-2xl mx-auto">Garanti Emlak ile hayalinizdeki eve ve doğru yatırıma en kısa sürede ulaşın.</p>
</header>

<div class="container mx-auto my-12 px-4">
    <div class="custom-alert p-6 mb-12 shadow-sm flex items-center space-x-4 animate__animated animate__bounceIn">
        <div class="p-3 bg-green-100 rounded-full text-[var(--ana-yesil)]">
            ℹ️
        </div>
        <div>
            <h4 class="font-bold text-lg text-[var(--ana-yesil)]">Ziyaretçilerimizin Dikkatine</h4>
            <p class="text-sm text-gray-600">Sitemizdeki tüm ilanlar güncel olup, detaylı inceleme ve konum bilgisi için doğrudan sahibinden.com altyapısına yönlendirilmektedir.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        
        <aside class="lg:col-span-1 bg-white p-6 shadow-lg rounded-box h-fit sticky top-24 border border-gray-100">
            <h3 class="text-xl font-bold text-[var(--ana-yesil)] mb-6 pb-2 border-b-2 border-green-200" id="danismanlar">
                Danışmanlarımız
            </h3>
            <div class="space-y-6">
                <div class="flex items-center space-x-4 p-2 hover:bg-gray-50 rounded-xl transition">
                    <img src="https://via.placeholder.com/60" alt="Danışman" class="w-12 h-12 rounded-full object-cover border-2 border-[var(--acik-yesil)]">
                    <div>
                        <h4 class="font-bold text-sm">Tamer Canbaz</h4>
                        <p class="text-xs text-gray-500">Broker / Firma Sahibi</p>
                    </div>
                </div>
                <?php if($isAdmin): ?>
                    <a href="admin.php?action=edit_danisman" class="block text-center text-xs bg-yellow-500 text-white py-2 rounded-full font-bold">⚙️ Danışmanları Düzenle</a>
                <?php endif; ?>
            </div>
        </aside>

        <main class="lg:col-span-3 space-y-16">
            
            <section id="ilanlar">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-[var(--ana-yesil)]">Güncel İlanlarımız</h2>
                    <?php if($isAdmin): ?>
                        <a href="admin.php?action=add_ilan" class="text-xs bg-blue-600 text-white px-4 py-2 rounded-full font-bold">+ Yeni İlan Ekle</a>
                    <?php endif; ?>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-box shadow-md overflow-hidden hover:shadow-xl transition flex flex-col justify-between border border-gray-100 group">
                        <div>
                            <div class="relative overflow-hidden">
                                <img src="https://via.placeholder.com/400x250" alt="İlan Görseli" class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                                <span class="absolute top-3 right-3 bg-green-600 text-white text-xs px-3 py-1 rounded-full font-bold">Satılık</span>
                            </div>
                            <div class="p-5">
                                <h3 class="font-bold text-lg text-gray-900 mb-2">Tarsus Merkezde Lüks 3+1 Daire</h3>
                                <p class="text-sm text-gray-600 mb-4">Geniş balkonlu, masrafsız, krediye uygun daire.</p>
                                <span class="text-xl font-extrabold text-[var(--ana-yesil)]">3.250.000 TL</span>
                            </div>
                        </div>
                        <div class="p-5 pt-0">
                            <a href="https://www.sahibinden.com/ilan/detay" target="_blank" class="block text-center bg-[var(--ana-yesil)] text-white py-3 rounded-xl font-semibold btn-custom text-sm">
                                Sahibinden.com'da İncele ↗
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="islerimiz" class="bg-white p-8 rounded-box shadow-md border border-gray-100">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-[var(--ana-yesil)]">Neler Yapıyoruz?</h2>
                    <?php if($isAdmin): ?>
                        <a href="admin.php?action=edit_islerimiz" class="text-xs bg-yellow-500 text-white px-3 py-1 rounded-full font-bold">⚙️ Düzenle</a>
                    <?php endif; ?>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="p-4 bg-gray-50 rounded-2xl text-center">
                        <div class="text-3xl mb-2">🏢</div>
                        <h4 class="font-bold mb-1">Gayrimenkul Danışmanlığı</h4>
                        <p class="text-xs text-gray-500">Doğru ekspertiz ile mülkünüze gerçek değerini ekiyoruz.</p>
                    </div>
                    <div class="p-4 bg-gray-50 rounded-2xl text-center">
                        <div class="text-3xl mb-2">📸</div>
                        <h4 class="font-bold mb-1">Profesyonel Çekim</h4>
                        <p class="text-xs text-gray-500">İlanlarınızı en iyi açılardan fotoğraflayıp yayına alıyoruz.</p>
                    </div>
                    <div class="p-4 bg-gray-50 rounded-2xl text-center">
                        <div class="text-3xl mb-2">🤝</div>
                        <h4 class="font-bold mb-1">Pazarlama Yönetimi</h4>
                        <p class="text-xs text-gray-500">Sadece sahibinden'de değil, tüm dijital kanallarda öne çıkarıyoruz.</p>
                    </div>
                </div>
            </section>

        </main>
    </div>
</div>
