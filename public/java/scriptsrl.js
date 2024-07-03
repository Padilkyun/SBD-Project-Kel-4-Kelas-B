const daftar = document.getElementById('id-120273');
const downloadButtonformat = document.getElementById('id-120213');
const downloadButtonkartu = document.getElementById('id-120221');
const downloadButtonfile = document.getElementById('id-120225');
const downloadButtonproteus = document.getElementById('id-1205');
const downloadButton1 = document.getElementById('id-117188');
const downloadButton2 = document.getElementById('id-117198');
const downloadButton3 = document.getElementById('id-117204');
const downloadButton4 = document.getElementById('id-117210');
const downloadButton5 = document.getElementById('id-117216');
const downloadButton6 = document.getElementById('id-117222');
const downloadButton7 = document.getElementById('id-117228');
const downloadButton8 = document.getElementById('id-117234');
const downloadFileDaftar = 'https://docs.google.com/document/d/1rwwwe1sQvNrUidXmUf4spXUqhub_TWwy/edit?usp=sharing&ouid=103003327873453436835&rtpof=true&sd=true';
const downloadFileFormat = 'https://ctftime.org/';
const downloadFileKartu = '';
const downloadFileProteus = '';
const downloadFileAsistensi = '';
const downloadFile1 = '';
const downloadFile2 = '';
const downloadFile3 = '';
const downloadFile4 = '';
const downloadFile5 = '';
const downloadFile6 = '';
const downloadFile7 = '';
const downloadFile8 = '';

daftar.addEventListener('click', function() {
  const downloadLink = document.createElement('a');
  downloadLink.href = downloadFileDaftar;
  downloadLink.download = 'File Asistensi.pdf';
  downloadLink.target = '_blank';
  downloadLink.click();
  downloadLink.remove();
});

downloadButton1.addEventListener('click', function() {
    const downloadLink = document.createElement('a');
    downloadLink.href = downloadFile1;
    downloadLink.download = 'File Asistensi.pdf';
    downloadLink.target = '_blank';
    downloadLink.click();
    downloadLink.remove();
  });

  downloadButtonformat.addEventListener('click', function() {
    const downloadLink = document.createElement('a');
    downloadLink.href = downloadFileFormat;
    downloadLink.download = 'File Asistensi.pdf';
    downloadLink.target = '_blank';
    downloadLink.click();
    downloadLink.remove();
  });

  downloadButtonkartu.addEventListener('click', function() {
    const downloadLink = document.createElement('a');
    downloadLink.href = downloadFileKartu;
    downloadLink.download = 'File Asistensi.pdf';
    downloadLink.target = '_blank';
    downloadLink.click();
    downloadLink.remove();
  });

  downloadButtonfile.addEventListener('click', function() {
    const downloadLink = document.createElement('a');
    downloadLink.href = downloadFileAsistensi;
    downloadLink.download = 'File Asistensi.pdf';
    downloadLink.target = '_blank';
    downloadLink.click();
    downloadLink.remove();
  });

  downloadButtonproteus.addEventListener('click', function() {
    const downloadLink = document.createElement('a');
    downloadLink.href = downloadFileProteus;
    downloadLink.download = 'File Asistensi.pdf';
    downloadLink.target = '_blank';
    downloadLink.click();
    downloadLink.remove();
  });

  downloadButton2.addEventListener('click', function() {
    const downloadLink = document.createElement('a');
    downloadLink.href = downloadFile2;
    downloadLink.download = 'File Asistensi.pdf';
    downloadLink.target = '_blank';
    downloadLink.click();
    downloadLink.remove();
  });

  downloadButton3.addEventListener('click', function() {
    const downloadLink = document.createElement('a');
    downloadLink.href = downloadFile3;
    downloadLink.download = 'File Asistensi.pdf';
    downloadLink.target = '_blank';
    downloadLink.click();
    downloadLink.remove();
  });

  downloadButton4.addEventListener('click', function() {
    const downloadLink = document.createElement('a');
    downloadLink.href = downloadFile4;
    downloadLink.download = 'File Asistensi.pdf';
    downloadLink.target = '_blank';
    downloadLink.click();
    downloadLink.remove();
  });

  downloadButton5.addEventListener('click', function() {
    const downloadLink = document.createElement('a');
    downloadLink.href = downloadFile5;
    downloadLink.download = 'File Asistensi.pdf';
    downloadLink.target = '_blank';
    downloadLink.click();
    downloadLink.remove();
  });

  downloadButton6.addEventListener('click', function() {
    const downloadLink = document.createElement('a');
    downloadLink.href = downloadFile6;
    downloadLink.download = 'File Asistensi.pdf';
    downloadLink.target = '_blank';
    downloadLink.click();
    downloadLink.remove();
  });
