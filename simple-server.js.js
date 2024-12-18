import express from "express"; // Use ES module import syntax

const app = express(); // Create an Express app
const PORT = 3000; // Set the port number

// Define a simple route
app.get("/", (req, res) => {
  res.send("Hello, world! Your Express server is running.");
});

// Start the server
app.listen(PORT, () => {
  console.log(`Server is running on http://localhost:${PORT}`);
});
