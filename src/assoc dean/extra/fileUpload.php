// for file uploading

<div class="row">
                      <form id="uploadForm" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                          <label for="file-input" class="form-label">Upload file</label>
                          <input type="file" class="form-control" id="file-input" name="file_input" required>
                          <div class="invalid-feedback">Please choose a file to upload.</div>
                        </div>
                         <button type="upload" class="btn btn-primary">Upload</button>

<script>
                        document.getElementById("uploadForm").addEventListener("submit", function(event) {
                          event.preventDefault();

                          var fileInput = document.getElementById("file-input");
                          var file = fileInput.files[0];

                          if (file) {
                            var formData = new FormData();
                            formData.append("file", file);

                            var xhr = new XMLHttpRequest();
                            xhr.open("POST", "/submit", true);
                            xhr.onload = function() {
                              if (xhr.status === 200) {
                                console.log("File uploaded successfully");
                              } else {
                                console.error("File upload failed");
                              }
                            };
                            xhr.send(formData);
                          }
                        });
                      </script>