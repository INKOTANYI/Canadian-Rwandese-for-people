// Use ES module syntax for importing
import express from 'express';

// Initialize the Express app
const app = express();
const PORT = 3000;

// Basic GET route
app.get("/", (req, res) => {
  res.send("Hello, world! The server is running.");
});

// Basic POST route
app.post("/test", (req, res) => {
  res.json({ message: "POST request was successful!" });
});

// Start the server
app.listen(PORT, () => {
  console.log(`Server is running on http://localhost:${PORT}`);
});
