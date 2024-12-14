function submitForm() {
    const name = $("#name").val();
    const email = $("#email").val();
    const subject = $("#subject").val();
    const msg = $("#msg").val();

    if (!name || !email || !subject || !msg) {
        alert("All fields are required!");
        return;
    }

    $("#myform").submit();
}

document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".nav-link");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    navLinks.forEach((link) => {
                        link.classList.remove("active");
                        if (link.getAttribute("href").substring(1) === entry.target.id) {
                            link.classList.add("active");
                        }
                    });
                }
            });
        }, {
            threshold: 0.5, // Trigger when 50% of the section is in view
        }
    );

    sections.forEach((section) => {
        observer.observe(section);
    });
});