
<div class="container px-lg-5">
    <div class="row my-lg-5 my-4 d-none" id="ImageData">
        <div class="d-flex my-2">
            <a href="" class="btn btn-primary px-4" download="renderedImage.jpg" id="downloadImage">Download</a>
        </div>
        <p>Please right click to save image as</p>
        <img src="" alt="" class="img-fluid my-3" id="imagePort">

    </div>
    <div class="row my-lg-5 my-3">

        <form id="virtualForm" action="" enctype="multipart/form-data">
            
            <h2 class="my-3">Create a render</h2>
            <div class="my-3">
               <label for="formFile" class="form-label">Select an image (Max size 1MB)</label>
                <input id="fileData" class="form-control" type="file" name="filed" id="formFile" accept="image/*" required>
            </div>
            <div class="my-3">
                <select class="form-select" aria-label="Default select example" name="room_type" required>
                    <option value="">Room Type (The type of room in the uploaded photo.)</option>
                    <option value="living">Living Room</option>
                    <option value="bed">Bed</option>
                    <option value="kitchen">Kitchen</option>
                    <option value="dining">Dining</option>
                    <option value="bathroom">Bathroom</option>
                    <option value="home_office">Home Office</option>
                </select>
            </div>
            <div class="my-3">
                <select class="form-select" aria-label="Default select example" name="style" required>
                    <option value="">Style (The desired style of furnishing. Must be one of the following)</option>
                    <option value="standard">Standard (Best Results)</option>
                    <option value="modern">Modern</option>
                    <option value="scandinavian">Scandinavian</option>
                    <option value="industrial">Industrial</option>
                    <option value="mid-century">Mid-century</option>
                    <option value="coastal">Coastal</option>
                    <option value="american">American</option>
                    <option value="southwestern">Southwestern</option>
                    <option value="farmhouse">Farmhouse</option>
                    <option value="luxury">Luxury</option>
                </select>
            </div>
            <div class="my-3">
                <p class="mb-0" >Resolution</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="4k" name="resolution" id="flexRadioDefault1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        4k
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" value="full-hd" name="resolution" id="flexRadioDefault2" >
                    <label class="form-check-label" for="flexRadioDefault2">
                        Full-HD
                    </label>
                </div>
            </div>
            <div class="my-5">
                <button type="submit" id="renderButton" class=" d-flex justify-content-between align-items-center btn btn-primary px-4">
                    Render
                </button>
            </div>

        </form>
    </div>

    <div class="row">
        <div class="d-flex justify-content-between flex-lg-row flex-column align-items-center">
            <div class="">
                <h2 >
                    Rendered Images
                </h2 >
                <p class="mt-0">Please right click to save image as</p>
            </div>
            <div class="d-flex">
                <button class="btn btn-danger px-4"  id="deleteImages">Delete All</button>
            </div>
        </div>
    </div>
    <div class="row my-3 g-4" id="allImages">
        
        
    </div>
</div>
