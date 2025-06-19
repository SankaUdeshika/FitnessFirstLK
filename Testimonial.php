<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Trainer Admin Panel</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #121212;
      color: white;
      padding: 30px;
    }

    .form-container {
      background: #1e1e1e;
      padding: 20px;
      border-radius: 12px;
      max-width: 500px;
      margin-bottom: 30px;
    }

    input, label {
      width: 100%;
      margin: 10px 0;
      padding: 10px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
    }

    input[type="file"] {
      padding: 5px;
      background: #000;
      color: white;
    }

    button {
      background-color: crimson;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      width: 100%;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #1e1e1e;
      margin-top: 40px;
      border-radius: 12px;
      overflow: hidden;
    }

    th, td {
      padding: 12px;
      border-bottom: 1px solid #444;
      text-align: center;
    }

    th {
      background-color: #2c2c2c;
    }

    img.preview {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 8px;
    }

    .edit-btn, .delete-btn {
      background-color: #444;
      padding: 6px 10px;
      border-radius: 6px;
      margin: 3px;
      cursor: pointer;
    }

    .edit-btn:hover { background-color: #3498db; }
    .delete-btn:hover { background-color: #e74c3c; }
    a {
      color: #00aced;
      text-decoration: none;
    }
  </style>
</head>
<body onload="LoadTestimonial();">

  <div class="form-container">
    <h2 id="form-title">Add Testimonial</h2>
        <input type="file" id="imageInput" accept="image/*" required />
    <input type="text" id="clienName" placeholder="Client Name" required />
    <input type="text" id="description" placeholder="Description" required />
   <input type="number" id="rating" placeholder="Rating" min="1" max="5" step="1" required />
   
    <button onclick="handleTestimonial();">Add Testimonial</button>
  </div>

  <table id="testimonialTable">
    <thead>
      <tr>
        <th>Image</th>
        <th>Client Name</th>
        <th>Description</th>
        <th>Rating</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>

  <script src="js/script.js"></script>

</body>
</html>
