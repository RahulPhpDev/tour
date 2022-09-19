<!-- ================== FOOTER ================ -->
<footer class="footer border text-white">
    <div class="lg:p-10 p-2 flex flex-col lg:flex-row">
        <div class="footer-about-us w-full lg:w-w-7/12">
            <div class="footer-about-us-contain ">
                <h2>Logo</h2>
                <div>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad
                    voluptatibus necessitatibus culpa earum perferendis excepturi
                    praesentium aliquam deleniti voluptates, adipisci blanditiis
                    ducimus fugit quibusdam, dolorem, delectus minus quo enim laborum?
                </div>
            </div>
        </div>

        <div class="footer-menu-section mt-10 lg:mt-0 lg:text-center">
            <h3 class="font-bold">About US</h3>
            <ul class="mt-10 footer-menu-ul">
                <li>Our Story</li>
                <li>Page</li>
                <li>Enquiry</li>
            </ul>
        </div>

        <div class="footer-contact-us mt-10 lg:mt-0  lg:text-right">
            <div>
                <h3 class="font-bold">Contact Info</h3>
                <p class="mt-10">155 Hindolakhal, Devprayag</p>
                <span> 249122 </span>
            </div>

            <div>+91 8126270308</div>

            <div>example@gmail.com</div>
        </div>
    </div>
</footer>
<!-- ================== END FOOTER ================ -->
<script>
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
</script>
