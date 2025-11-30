<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Large 3D Rotating Gallery with Video</title>
  <style>
    body {
      background: url('clg1.png') no-repeat center center fixed;
      background-size: cover;
      
      color: #fff;
      font-family: Arial, sans-serif;
      height: 100vh;
      margin: 0;
      padding: 40px 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      overflow-x: hidden;
    }
    .gallery-container {
      position: relative;
      width: 700px;
      height: 450px;
      perspective: 1400px;
      margin-bottom: 40px;
    }
    .gallery {
      width: 100%;
      height: 100%;
      position: absolute;
      transform-style: preserve-3d;
      transition: transform 0.7s cubic-bezier(.6,-0.1,.7,1.2);
    }
    .gallery span {
      position: absolute;
      left: 0;
      top: 0;
      width: 560px;
      height: 350px;
      transform-style: preserve-3d;
      display: block;
      background: #181818;
      border-radius: 20px;
    }
    .gallery span img,
    .gallery span video {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 20px;
      box-shadow: 0 16px 42px rgba(120,120,180,0.4);
      border: 5px solid #0a0909ff;
      background: #121212;
      display: block;
    }
    .button-container {
      display: flex;
      gap: 30px;
      justify-content: center;
    }
    .btn {
      background: #e04a74;
      border: none;
      color: #fff;
      padding: 14px 40px;
      border-radius: 12px;
      font-weight: bold;
      font-size: 1.2em;
      cursor: pointer;
      box-shadow: 0 3px 10px rgba(90,90,120,0.15);
      transition: background 0.3s;
    }
    .btn:hover {
      background: #c33763;
      filter: brightness(1.14);
    }
  </style>
</head>
<body>
  <h2>Very Large College Event 3D Rotating Gallery</h2>
  <div class="gallery-container">
    <div class="gallery" id="gallery">
      <span style="--i:0"><img src="gallery/Screenshot 2025-11-17 104846.png" alt="Event 1" /></span>
      <span style="--i:1"><img src="gallery/Screenshot 2025-11-17 110144.png" alt="Event 2" /></span>
      <span style="--i:2"><img src="gallery/Screenshot 2025-11-17 112915.png" alt="Event 3" /></span>
      <span style="--i:5">
        <video src="gallery/vi1.mp4" autoplay loop muted playsinline></video>
      </span>
      <span style="--i:3"><img src="gallery/Screenshot 2025-11-17 112956.png" alt="Event 4" /></span>
      <span style="--i:4"><img src="gallery/Screenshot 2025-11-16 125701.png" alt="Event 5" /></span>
      <span style="--i:5">
        <video src="gallery/Screen Recording 2025-11-19 125919.mp4" autoplay loop muted playsinline></video>
      </span>
      <span style="--i:6"><img src="gallery/Screenshot 2025-11-17 113127.png" alt="Event 6" /></span>
    </div>
  </div>
  <div class="button-container">
    <button class="btn" id="prev">Previous</button>
    <button class="btn" id="next">Next</button>
        <button class="btn"><a href="page1.php">home</a></button>

  </div>
  <script>
    const items = document.querySelectorAll('.gallery span');
    const n = items.length;
    const radius = 480; // Large circle radius for big gallery
    const gallery = document.getElementById('gallery');
    let current = 0;
    let angle = 0;

    // Set initial positions
    items.forEach((el, idx) => {
      el.style.transform = `rotateY(${idx * (360/n)}deg) translateZ(${radius}px)`;
    });

    function rotateGallery(dir) {
      current = (current + dir + n) % n;
      angle = current * (360/n);
      gallery.style.transform = `rotateY(${-angle}deg)`;
    }

    // Buttons
    document.getElementById('next').onclick = () => rotateGallery(1);
    document.getElementById('prev').onclick = () => rotateGallery(-1);

    // Auto rotate every 3.5 seconds
    setInterval(() => rotateGallery(1), 3500);
  </script>
</body>
</html>
