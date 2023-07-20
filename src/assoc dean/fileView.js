<!-- <script type="text/javascript"> -->
const express = require('express');
const multer = require('multer');
const path = require('path');

const app = express();
const upload = multer({ dest: 'uploads/' });

app.post('/upload', upload.single('uploadedFile'), (req, res) => {
  // Process the uploaded file here and save it to a location of your choice.
  // You can store the file path in a database or session and serve it back to the user later.

  // For demonstration purposes, let's assume the file is stored in the 'uploads/' directory.
  const uploadedFilePath = req.file.path;
  res.send(`<a href="${uploadedFilePath}" download>Download the uploaded file</a>`);
});

app.listen(3000, () => {
  console.log('Server started on http://localhost:3000');
});
</script>

<form action="/upload" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                          <label for="fileInput" class="form-label">Choose a file:</label>
                          <input type="file" class="form-control" id="fileInput" name="uploadedFile">
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                        </form>