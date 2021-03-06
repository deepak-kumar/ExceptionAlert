<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exception Alert</title>
    </head>
    <body style="margin: 0px; padding: 0px; width: 1024px;">
        <div style="padding: 10px; background-color: #ff4500; color: white;">
            <h3 style="margin: 0 0 0 0; font-weight: 300;">
                <div>[{{ $method }}]: {{ $fullUrl }}</div>
            </h3>
            <h1 style="margin: 0 0 0 0; font-size: 3em;">
                {{ $class }}
                <br>
                {{ $exception }}
            </h1> 
        </div>
        <div style="border-top: 1px solid #141414; border-bottom: 1px solid #ff4500; background-color: #ff4500; color: #ffffff; padding: 5px 5px 5px 5px;">{{ $file }}</div>
        <pre style="margin: 0 0 0 0; background: #141414; color: #cccccc; font-family: monospace; font-size: 12px; padding: 5px 12px; white-space: pre-wrap; word-break: break-word;"><?php foreach ($exegutor as $lineInfo) : ?>{{ $lineInfo['wrap_left'] }} {{ $lineInfo['line'] }} {{ $lineInfo['wrap_right']}}<?php endforeach; ?></pre>
        <div style="padding: 10px; background-color: #ff4500;">
            <div style="color: #ffffff; margin: 0 0 0 0; font-size: 22px;">Stack trace</div>
        </div>
        <pre style="margin: 0 0 0 0; background: #141414; color: #aaaaaa; font-family: monospace; font-size: 12px; padding: 5px 12px; white-space: pre-wrap; word-break: break-word;">{{ $error }}</pre>
        <div style="padding: 6px; text-align: left; background-color: #ff4500;">
            <h6 style="margin: 0 0 0 0; font-weight: 100; font-family: monospace; font-size: 10px; color: #F5F5F5;">
                developed by Bebetter 
            </h6>
        </div>
        
        <table style="border-collapse: collapse;">
            <tbody>
                @foreach ($storage as $caption => $data)
                    @include('exception-alert::storage')
                @endforeach
            </tbody>
        </table>
    </body>
</html>

