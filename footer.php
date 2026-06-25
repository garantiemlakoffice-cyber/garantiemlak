<footer class="bg-gray-900 text-gray-300 mt-20 py-12 px-6 border-t-4 border-[var(--ana-yesil)]">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-sm">
        <div>
            <h3 class="text-white text-lg font-bold mb-4"><?php echo FIRMA_ADI; ?></h3>
            <p class="opacity-70">Mersin Tarsus bölgesinde kurumsal ve güvenilir gayrimenkul çözümleri.</p>
        </div>
        <div>
            <h3 class="text-white text-lg font-bold mb-4">İletişim Bilgileri</h3>
            <ul class="space-y-2 opacity-80">
                <li>📍 <?php echo ADRES; ?></li>
                <li>📞 <a href="<?php echo TEL_LINK; ?>" class="hover:text-white transition"><?php echo TELEFON; ?></a></li>
                <li>✉️ <a href="mailto:<?php echo EPOSTA; ?>" class="hover:text-white transition"><?php echo EPOSTA; ?></a></li>
            </ul>
        </div>
        <div class="text-left md:text-right flex flex-col justify-between">
            <div>
                 <a href="admin.php" class="text-xs opacity-40 hover:opacity-100 transition">Yönetim Paneli Girişi</a>
            </div>
            <p class="text-xs opacity-60 mt-6 md:mt-0">
                &copy; <?php echo date('Y'); ?> <?php echo FIRMA_ADI; ?>. <br>
                <span class="text-[var(--acik-yesil)] font-semibold">Tüm hakları TAMERCANBAZ tarafından alınmıştır.</span>
            </p>
        </div>
    </div>
</footer>

</body>
</html>
