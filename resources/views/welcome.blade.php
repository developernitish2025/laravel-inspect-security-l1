<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Block Inspect</title>
  <style>
    /* body {
      display: none; /* Hide content initially */
    /* } */
  </style>
</head>
<body>
  <h1>Welcome to the Secure Website</h1>
  <p>This site has restricted developer tool access.</p>

  <script>
    // Function to detect if developer tools are open
    function detectDevTools() {
  const threshold = 160; // Height/width threshold for dev tools

  // Create an invisible dummy element
  const element = document.createElement('div');
  element.style.position = 'absolute';
  element.style.top = '-9999px';
  element.style.width = '100px';
  element.style.height = '100px';
  element.style.overflow = 'scroll';
  document.body.appendChild(element);

  // Check for size changes
  const widthThresholdExceeded = window.outerWidth - window.innerWidth > threshold;
  const heightThresholdExceeded = window.outerHeight - window.innerHeight > threshold;

  // Remove the dummy element
  document.body.removeChild(element);

  // If any threshold is exceeded, assume dev tools are open
  if (widthThresholdExceeded || heightThresholdExceeded) {
    document.body.innerHTML = "Developer tools detected. Access denied.";
    document.body.style.display = "block";
    document.body.style.color = "red";
  }
}

// Run detection periodically
setInterval(detectDevTools, 1000);

  </script>
</body>
</html>
