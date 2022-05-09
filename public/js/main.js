var mycarousel = document.getElementById('carouselExampleControls');
var desc = document.getElementById('descript');
var title = document.getElementById('title-home');  
 
mycarousel.addEventListener('slide.bs.carousel', function (e) {
    if(e.to == 0){

      title.innerHTML= "Mengapa harus ViralNews ?"; 
     desc.innerHTML= "ViralNews merupakan portal berita yang terpercaya dan menyajikan berita terkini. Sumber berita berasal dari masyarakat dan para pakar yang memiliki kealihan dibidangnya. Tim ViralNews memiliki sertifikasi sesuai bidang keahlian yang dipegang. Jangan ragu dengan ViralNews dalam menjadikan acuan berita terupdate anda."; 
  }
  if(e.to == 1){
    title.innerHTML= "Bergabung dengan ViralNews ?"; 
    desc.innerHTML= "Mari bergabung dengan ViralNews, dengan menjadi bagian ViralNews anda dapat berkontribusi untuk membuat berita yang profesional. "; 
  
  }
  })