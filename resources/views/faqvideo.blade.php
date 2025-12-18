@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FAQ Video</title>

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background: #f2f5f8;
            font-family: "Segoe UI", sans-serif;
            margin: 0;
        }

        .page-wrapper {
            padding: 20px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .page-header h2 {
            margin: 0;
            font-weight: 400;
        }

        .breadcrumb {
            font-size: 14px;
            color: #888;
        }

        .card-box {
            background: #fff;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 1px 2px rgba(0,0,0,.1);
            min-height: 400px;
            position: relative;
        }

        .btn-add {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #eee;
            border: none;
            padding: 8px 14px;
            border-radius: 3px;
            font-size: 13px;
            cursor: pointer;
        }

        /* Video Box (replaces error box) */
        .video-box {
            margin-top: 60px;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 3px;
            background: #fafafa;
        }

        .video-box h4 {
            margin: 0 0 15px 0;
            font-weight: 500;
            color: #333;
        }

        .video-wrapper {
            width: 100%;
            height: 350px;
            background: #000;
            border-radius: 3px;
            overflow: hidden;
        }

        video, iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .submit-btn {
            margin-top: 20px;
            text-align: right;
        }

        .submit-btn button {
            background: #3c8dbc;
            border: none;
            padding: 8px 18px;
            color: #fff;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="page-wrapper">

    <!-- Header -->
    <div class="page-header">
        <h2>FAQ Video</h2>
        <div class="breadcrumb">
            <i class="fa fa-home"></i> / FAQ Video
        </div>
    </div>

    <!-- Card -->
    <div class="card-box">

        <button class="btn-add">ADD MORE VIDEO</button>

        <!-- Video Streamer (instead of error box) -->
        <div class="video-box">
            <h4>FAQ Video Preview</h4>

            <div class="video-wrapper">
                <!-- Option 1: HTML5 video -->
                <video controls>
                    <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

                <!-- Option 2: YouTube embed (comment above and uncomment below if needed) -->
                
                <!-- <iframe
                    src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                    allowfullscreen>
                </iframe> -->
               
            </div>
        </div>

        <!-- Submit -->
        <div class="submit-btn">
            <button>SUBMIT</button>
        </div>

    </div>
</div>

</body>
</html>
@endsection