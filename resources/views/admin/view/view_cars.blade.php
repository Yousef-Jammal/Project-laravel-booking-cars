
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced File Upload Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7f6;
            font-family: 'Arial', sans-serif;
        }
        .form-container {
            max-width: 800px;
            margin: 30px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .form-heading {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 25px;
            color: #333;
            text-align: center;
        }
        .form-label {
            font-weight: 600;
            color: #555;
        }
        .form-control {
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .btn-primary {
            background-color: #ffa633;
            border-color: #e8941c;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
            border-radius: 5px;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #e8941c;
            border-color: #d87a0a;
        }
        .form-section {
            margin-bottom: 20px;
        }
        .form-section h5 {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #444;
            border-bottom: 2px solid #ddd;
            padding-bottom: 5px;
            text-align: center;
        }
        .custom-file-upload {
            border: 2px dashed #ffa633;
            border-radius: 5px;
            padding: 20px;
            background: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            position: relative;
            transition: border-color 0.3s ease, background-color 0.3s ease;
            text-align: center;
            overflow: hidden;
        }
        .custom-file-upload.dragover {
            border-color: #e8941c;
            background-color: #f0f0f0;
        }
        .custom-file-upload input[type="file"] {
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            height: 100%;
            width: 100%;
            cursor: pointer;
        }
        .upload-btn {
            font-size: 16px;
            color: #ffa633;
            border: 1px solid #ffa633;
            background-color: #fff;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .upload-btn:hover {
            background-color: #ffa633;
            color: #fff;
        }
        .file-info {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            margin-top: 10px;
        }
        .file-name {
            font-size: 16px;
            color: #555;
            margin-bottom: 10px;
        }
        .file-preview {
            width: 100%;
            max-width: 600px;
            height: auto;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ccc;
            margin-top: 10px;
            background: #f9f9f9;
            position: relative;
        }
        .file-preview img {
            width: 100%;
            height: auto;
            object-fit: contain;
        }
        .file-preview .icon {
            font-size: 60px;
            color: #999;
        }
        .file-preview .file-icon {
            width: 80px;
            height: 80px;
            background: #ddd;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .remove-file-btn {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #ffa633;
            color: #fff;
            border: none;
            border-radius: 50%;
            padding: 5px;
            cursor: pointer;
            font-size: 20px;
            transition: background 0.3s ease, transform 0.3s ease;
            height: 30px;
            width: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .remove-file-btn:hover {
            background: #c0392b;
            transform: scale(1.1);
        }
        .progress {
            height: 5px;
            background-color: #e9ecef;
            border-radius: 5px;
            margin-top: 10px;
        }
        .progress-bar {
            height: 100%;
            background-color: #ffa633;
            border-radius: 5px;
            transition: width 0.4s ease;
        }
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
        .success-message {
            color: green;
            font-size: 14px;
            margin-top: 10px;
        }
        .tooltip {
            font-size: 12px;
            color: #888;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #333;
            color: #fff;
            padding: 5px 10px;
            border-radius: 4px;
            white-space: nowrap;
            display: none;
        }
        .custom-file-upload:hover .tooltip {
            display: block;
        }
        @media (max-width: 768px) {
            .form-container {
                padding: 20px;
            }
            .form-heading {
                font-size: 24px;
            }
            .btn-primary {
                font-size: 14px;
                padding: 10px 16px;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="form-heading">Proof of Car Ownership Form</h2>
        <div id="carInfo">
            <!-- Car Information Section -->
            <div class="form-section">
                <h5>Car Information</h5>
                <div class="mb-3">
                    <label class="form-label">Car Make</label>
                    <p class="form-control-plaintext">{{ $car->make }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Car Model</label>
                    <p class="form-control-plaintext">{{ $car->model }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Car Brand</label>
                    <p class="form-control-plaintext">{{ $car->brand->name }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Body Type</label>
                    <p class="form-control-plaintext">{{ $car->body }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Transmission</label>
                    <p class="form-control-plaintext">{{ $car->transmission }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Fuel Type</label>
                    <p class="form-control-plaintext">{{ $car->fuel_type }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Drivetrain</label>
                    <p class="form-control-plaintext">{{ $car->drivetrian }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Air Conditioning</label>
                    <p class="form-control-plaintext">{{ $car->ac }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Number of Doors</label>
                    <p class="form-control-plaintext">{{ $car->door }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Brake Type</label>
                    <p class="form-control-plaintext">{{ $car->brake }}</p>
                </div>
            </div>

            <!-- File Upload Section -->
            <div class="form-section">
                <h5>Proof of Ownership</h5>
                <div class="file-info">
                    @if($car->proof_of_ownership)
                        <img src="{{ asset('car_images/' . $car->images->name ) }}" alt="Proof of Ownership" class="img-fluid">
                    @else
                        <p>No proof of ownership uploaded.</p>
                    @endif
                </div>
            </div>

            <!-- Upload Car Images Section -->
            {{-- <div class="form-section">
                <h5>Car Images</h5>
                <div class="file-previews">
                    @if(!empty($car->images))
                        @foreach($car->images as $image)
                            <img src="{{ asset('car_images/' . $image) }}" alt="Car Image" class="img-fluid mb-2">
                        @endforeach
                    @else
                        <p>No car images uploaded.</p>
                    @endif
                </div>
            </div> --}}
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('fileInput');
            const fileInfo = document.getElementById('fileInfo');
            const fileName = document.getElementById('fileName');
            const filePreview = document.getElementById('filePreview');
            const removeFileBtn = document.getElementById('removeFileBtn');
            const uploadProgress = document.getElementById('uploadProgress');
            const progressBar = document.getElementById('progressBar');

            fileInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    fileName.textContent = file.name;
                    removeFileBtn.style.display = 'block';
                    if (file.type.startsWith('image/')) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            filePreview.innerHTML = `<img src="${e.target.result}" alt="${file.name}">`;
                        };
                        reader.readAsDataURL(file);
                    } else {
                        filePreview.innerHTML = `<span class="icon">&#128194;</span>`;
                    }
                }
            });

            removeFileBtn.addEventListener('click', function() {
                fileInput.value = '';
                fileName.textContent = 'No file selected';
                filePreview.innerHTML = '';
                removeFileBtn.style.display = 'none';
            });

            document.getElementById('uploadForm').addEventListener('submit', function(event) {
                event.preventDefault();
                uploadProgress.style.display = 'block';
                let width = 0;
                const interval = setInterval(function() {
                    if (width >= 100) {
                        clearInterval(interval);
                        uploadProgress.style.display = 'none';
                    } else {
                        width += 10;
                        progressBar.style.width = width + '%';
                    }
                }, 200);
            });
        });
    </script>
</body>
</html>
