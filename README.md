## Project Overview
Walk With Me is a web-based platform designed to provide safety for students who feel unsafe walking around campus. The platform allows users to find a walker who will accompany them, ensuring a safer commuting experience. The service also integrates campus police monitoring to ensure student safety during the walk.

## Technologies
- Frontend:   HTML for dynamic user interfaces. This is the tool used to build the website or web app that the user interacts with (what users will see and click on).
- Backend: Node.js with Express for the server. This is the server-side part of the platform. It’s what handles user requests, like when someone asks to be matched with a walker, or when data is sent or received from the database.
- Database: mySQL for storing user data, walker profiles, and walk records. This is the database where user information, walker profiles, and walk details are stored. It's like a big digital notebook where all the important data lives.
- Authentication: OAuth2.0 and Auth0 for secure user authentication. These are used to securely log users into the platform. It ensures that only valid students/staff members can use the app (i.e., people with a university email).
- Real-Time Tracking: Google Maps API and Firebase for real-time tracking of walks. Google Maps helps show the walking route, and Firebase helps keep track of users' locations in real-time to make sure they're safe during their walk.
- Cloud Hosting: AWS (EC2 for hosting, S3 for storage). This is where the platform will be stored and run. AWS will provide the servers and services needed to run the platform.
- Background Check: Integration with Checkr for walker vetting. This tool will be used to check if the walkers have a clean background, ensuring the safety of the users.
- Notifications: Firebase Cloud Messaging for push notifications. This will be used to send real-time notifications (for example, when a walker is on the way, or if something goes wrong during a walk).

## API Integrations:
- Google Maps API: Used for real-time tracking of the walking route. The app will connect to Google Maps to display the walker's position and route.
- Auth0 API: Handles secure authentication for users and walkers. It helps manage logins via OAuth2.0 to ensure user data security.
- Checkr API: Used to perform background checks on walkers to ensure they are trustworthy and safe.
- Firebase API: Used for sending notifications and tracking walk data in real-time.

