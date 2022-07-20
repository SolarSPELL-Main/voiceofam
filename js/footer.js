const footerTemplate = document.createElement('template');
footerTemplate.innerHTML = `
<footer class="text-center">
    <address>Contact us at <a href="mailto:team@solarspell.org">team@solarspell.org</a></address>
    <p>Copyright &copy; 2021</p>
</footer>
`;
document.body.appendChild(footerTemplate.content);
$.ajax({ url: '/voiceofam/backend/update_visit.php'});
