<?php
// Reusable footer include for all pages.
// Expects $year to be defined by the including page.
if (!isset($year)) {
    $year = date('Y');
}
?>
<footer class="bg-surface-container-lowest border-t border-outline-variant w-full py-xl mt-3xl">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-lg px-margin-desktop max-w-7xl mx-auto">
        <div class="space-y-md">
            <div class="text-headline-md font-headline-md text-primary">ReSell Store</div>
            <p class="font-body-sm text-body-sm text-on-surface-variant">© <?php echo $year; ?> ReSell Store. Conscious consumerism for a better planet.</p>
            <div class="flex gap-md text-primary">
                <span class="material-symbols-outlined cursor-pointer hover:opacity-70">face_nod</span>
                <span class="material-symbols-outlined cursor-pointer hover:opacity-70">alternate_email</span>
                <span class="material-symbols-outlined cursor-pointer hover:opacity-70">language</span>
            </div>
        </div>
        <div class="space-y-md">
            <h4 class="font-label-md text-label-md text-primary">Company</h4>
            <ul class="space-y-sm">
                <li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline transition-colors" href="#">About Us</a></li>
                <li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline transition-colors" href="#">Sustainability</a></li>
                <li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline transition-colors" href="#">Careers</a></li>
            </ul>
        </div>
        <div class="space-y-md">
            <h4 class="font-label-md text-label-md text-primary">Support</h4>
            <ul class="space-y-sm">
                <li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline transition-colors" href="#">Help</a></li>
                <li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline transition-colors" href="#">Contact Support</a></li>
                <li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline transition-colors" href="#">Terms of Service</a></li>
            </ul>
        </div>
        <div class="space-y-md">
            <h4 class="font-label-md text-label-md text-primary">Resources</h4>
            <ul class="space-y-sm">
                <li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline transition-colors" href="#">Blog</a></li>
                <li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline transition-colors" href="#">Newsletter</a></li>
                <li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline transition-colors" href="#">Privacy Policy</a></li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>
