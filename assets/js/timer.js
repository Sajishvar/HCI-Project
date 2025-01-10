// Initialize timer variables
let startTime = Date.now();
let timeLimit = null; // Time limit in milliseconds

// Function to format time
function formatTime(ms) {
    const totalSeconds = Math.floor(ms / 1000);
    const hours = String(Math.floor(totalSeconds / 3600)).padStart(2, '0');
    const minutes = String(Math.floor((totalSeconds % 3600) / 60)).padStart(2, '0');
    const seconds = String(totalSeconds % 60).padStart(2, '0');
    return `${hours}:${minutes}:${seconds}`;
}

// Show popup on timer button click
document.getElementById('site-timer-btn').addEventListener('click', () => {
    document.getElementById('time-limit-popup').style.display = 'block';
});

// Close popup
document.getElementById('popup-close').addEventListener('click', () => {
    document.getElementById('time-limit-popup').style.display = 'none';
});

// Set time limit functionality
document.getElementById('popup-set-time-limit').addEventListener('click', () => {
    const inputMinutes = parseInt(document.getElementById('popup-time-limit').value, 10);
    if (!isNaN(inputMinutes) && inputMinutes > 0) {
        timeLimit = inputMinutes * 60 * 1000; // Convert minutes to milliseconds
        alert(`Time limit set to ${inputMinutes} minutes.`);
        document.getElementById('time-limit-popup').style.display = 'none';
    } else {
        alert('Please enter a valid time limit.');
    }
});

// Update the timer every second
setInterval(() => {
    const currentTime = Date.now();
    const elapsedTime = currentTime - startTime;
    document.getElementById('site-timer').textContent = formatTime(elapsedTime);

    // Check if time limit is exceeded
    if (timeLimit !== null && elapsedTime >= timeLimit) {
        alert('Time limit exceeded!');
        timeLimit = null; // Reset the time limit to avoid repeated alerts
    }
}, 1000);