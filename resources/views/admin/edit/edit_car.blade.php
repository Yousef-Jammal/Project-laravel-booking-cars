
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
        <form id="uploadForm">
            <!-- Personal Information Section -->
            <div class="form-section">
                <h5>Personal Information</h5>
                <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="phoneNumber" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter your phone number" required>
                </div>
            </div>

            <!-- Car Information Section -->
            <div class="form-section">
                <h5>Car Information</h5>
                <div class="mb-3">
                    <label for="carMake" class="form-label">Car Make</label>
                    <select id="carMake" name="carMake" class="form-control">
                        <option value="">Select Car Make</option>
                        <option value="Acura">Acura</option>
                        <option value="Alfa Romeo">Alfa Romeo</option>
                        <option value="Audi">Audi</option>
                        <option value="BMW">BMW</option>
                        <option value="Buick">Buick</option>
                        <option value="Cadillac">Cadillac</option>
                        <option value="Chevrolet">Chevrolet</option>
                        <option value="Chrysler">Chrysler</option>
                        <option value="Dodge">Dodge</option>
                        <option value="Fiat">Fiat</option>
                        <option value="Ford">Ford</option>
                        <option value="Genesis">Genesis</option>
                        <option value="GMC">GMC</option>
                        <option value="Honda">Honda</option>
                        <option value="Hyundai">Hyundai</option>
                        <option value="Infiniti">Infiniti</option>
                        <option value="Jaguar">Jaguar</option>
                        <option value="Jeep">Jeep</option>
                        <option value="Kia">Kia</option>
                        <option value="Land Rover">Land Rover</option>
                        <option value="Lexus">Lexus</option>
                        <option value="Lincoln">Lincoln</option>
                        <option value="Mazda">Mazda</option>
                        <option value="Mercedes-Benz">Mercedes-Benz</option>
                        <option value="Mini">Mini</option>
                        <option value="Mitsubishi">Mitsubishi</option>
                        <option value="Nissan">Nissan</option>
                        <option value="Porsche">Porsche</option>
                        <option value="Ram">Ram</option>
                        <option value="Subaru">Subaru</option>
                        <option value="Tesla">Tesla</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Volkswagen">Volkswagen</option>
                        <option value="Volvo">Volvo</option>
                        <!-- Add more car makes as needed -->
                    </select>
                </div>

                <div class="mb-3">
                    <label for="carModel" class="form-label">Car Model</label>
                    <input type="text" class="form-control" id="carModel" placeholder="Enter your car model" required>
                </div>

                <div class="mb-3">
                    <label for="carColor" class="form-label">Car Color</label>
                    <select id="carColor" name="carColor" class="form-control">
                        <option value="">Select Car Color</option>
                        <option value="White">White</option>
                        <option value="Black">Black</option>
                        <option value="Silver">Silver</option>
                        <option value="Gray">Gray</option>
                        <option value="Red">Red</option>
                        <option value="Blue">Blue</option>
                        <option value="Green">Green</option>
                        <option value="Yellow">Yellow</option>
                        <option value="Orange">Orange</option>
                        <option value="Purple">Purple</option>
                        <option value="Brown">Brown</option>
                        <option value="Beige">Beige</option>
                        <option value="Gold">Gold</option>
                        <option value="Pink">Pink</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="bodyType" class="form-label">Body Type</label>
                    <select id="bodyType" name="bodyType" class="form-control">
                        <option value="">Select Body Type</option>
                        <option value="Sedan">Sedan</option>
                        <option value="SUV">SUV</option>
                        <option value="Coupe">Coupe</option>
                        <option value="Hatchback">Hatchback</option>
                        <option value="Convertible">Convertible</option>
                        <option value="Wagon">Wagon</option>
                        <option value="Van">Van</option>
                        <option value="Pickup Truck">Pickup Truck</option>
                        <option value="Crossover">Crossover</option>
                        <!-- Add more body types as needed -->
                    </select>
                </div>
                <div class="mb-3">
                    <label for="transmission" class="form-label">Transmission</label>
                    <select id="transmission" name="transmission" class="form-control">
                        <option value="">Select Transmission</option>
                        <option value="Automatic">Automatic</option>
                        <option value="Manual">Manual</option>
                        <!-- Add more transmission types as needed -->
                    </select>
                </div>
                <div class="mb-3">
                    <label for="fuelType" class="form-label">Fuel Type</label>
                    <select id="fuelType" name="fuelType" class="form-control">
                        <option value="">Select Fuel Type</option>
                        <option value="Petrol">Petrol</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Electric">Electric</option>
                        <option value="Hybrid">Hybrid</option>
                        <!-- Add more fuel types as needed -->
                    </select>
                </div>
                <div class="mb-3">
                    <label for="drivetrain" class="form-label">Drivetrain</label>
                    <select id="drivetrain" name="drivetrain" class="form-control">
                        <option value="">Select Drivetrain</option>
                        <option value="FWD">Front-Wheel Drive (FWD)</option>
                        <option value="RWD">Rear-Wheel Drive (RWD)</option>
                        <option value="AWD">All-Wheel Drive (AWD)</option>
                        <option value="4WD">Four-Wheel Drive (4WD)</option>
                        <!-- Add more drivetrains as needed -->
                    </select>
                </div>
                <div class="mb-3">
                    <label for="ac" class="form-label">Air Conditioning</label>
                    <select id="ac" name="ac" class="form-control">
                        <option value="">Select AC Type</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="doors" class="form-label">Number of Doors</label>
                    <select id="doors" name="doors" class="form-control">
                        <option value="">Select Number of Doors</option>
                        <option value="2">2</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="brakes" class="form-label">Brake Type</label>
                    <select id="brakes" name="brakes" class="form-control">
                        <option value="">Select Brake Type</option>
                        <option value="Disc">Disc</option>
                        <option value="Drum">Drum</option>
                        <option value="ABS">ABS</option>
                        <!-- Add more brake types as needed -->
                    </select>
                </div>
            </div>

             <!-- File Upload Section -->
<div class="form-section">
    <h5>Upload Proof of Ownership</h5>
    <div class="custom-file-upload" id="fileUpload" role="region" aria-labelledby="fileUploadLabel">
        <label for="fileInput" id="fileUploadLabel" class="form-label">Upload Image</label>
        <input type="file" id="fileInput" accept="image/*" required aria-describedby="fileUploadDescription">
        <p id="fileUploadDescription" class="form-text">Please upload an image file only (e.g., .jpg, .png). Maximum file size: 5MB.</p>
        <div class="file-info">
            <img src="https://img.icons8.com/ios/50/000000/image.png" alt="Upload Image Icon" class="upload-icon">
            <div id="fileName" class="file-name">No file chosen</div>
            <div class="file-preview" id="filePreview">
                <img id="fileImage" src="#" alt="File Preview" style="display:none;">
            </div>
            <button type="button" class="remove-file-btn" id="removeFileBtn" style="display:none;">&times;</button>
        </div>
        <div id="uploadProgress" class="progress mt-3" style="display:none;">
            <div id="progressBar" class="progress-bar" role="progressbar" style="width: 0%;"></div>
        </div>
        <div id="errorMessage" class="error-message"></div>
    </div>
</div>

<!-- Upload Car Images Section -->
<div class="form-section">
    <h5>Upload Car Images</h5>
    <div class="custom-file-upload" id="fileUpload" role="region" aria-labelledby="fileUploadLabel">
        <label for="fileInput" id="fileUploadLabel" class="form-label">Upload Images</label>
        <input type="file" id="fileInput" accept="image/*" multiple required aria-describedby="fileUploadDescription">
        <p id="fileUploadDescription" class="form-text">Please upload up to 5 image files only (e.g., .jpg, .png). Maximum file size: 5MB each.</p>
        <div class="file-info">
            <img src="https://img.icons8.com/ios/50/000000/image.png" alt="Upload Image Icon" class="upload-icon">
            <div id="fileNames" class="file-names">No files chosen</div>
            <div class="file-previews" id="filePreviews"></div>
        </div>
        <div id="uploadProgress" class="progress mt-3" style="display:none;">
            <div id="progressBar" class="progress-bar" role="progressbar" style="width: 0%;"></div>
        </div>
        <div id="errorMessage" class="error-message"></div>
    </div>
</div>




            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
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
