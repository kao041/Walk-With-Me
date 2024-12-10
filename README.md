## Project Overview
Walk With Me is a web-based platform designed to provide safety for students who feel unsafe walking around campus. The platform allows users to find a walker who will accompany them, ensuring a safer commuting experience. The service also integrates campus police monitoring to ensure student safety during the walk.


## User Guide
The “Walk With Me” web application is designed to promote campus safety by connecting users with verified walkers who accompany them on their journeys. It allows users to request walking companions, view walker profiles, manage their requests, and receive notifications. Administrators can use the app to oversee and manage user and walker activities efficiently.

The home page serves as the starting point, providing an overview of the app’s features and quick access to core functionalities like reserving a walker, viewing past walks, and staying updated with announcements. Users can navigate to their profile page to request a walker by specifying their start and end locations, as well as the desired time for the walk. The profile page also displays current and past walk requests and notifications, with convenient quick links to other sections.

The walker profiles page showcases detailed information about available walkers, including their experience, certifications, ratings, and real-time availability status. Users can directly request a specific walker from this page. The contact page allows users to submit inquiries or feedback through a form, while emergency contact details are provided for immediate assistance.

Administrators can access the admin panel, which includes tools to manage walker and user statuses, monitor walk requests and incidents, and view analytics for system performance. The admin functionalities enable effective supervision of the app’s operations.

The login and signup page provides a secure interface for users to log in, reset passwords, or create new accounts. Enhanced visual effects make the interface engaging and user-friendly.

For developers, the code structure consists of HTML files with inline CSS styling. The backend uses mock API endpoints for features like updating walker and user statuses, fetching requests and flagged incidents, and retrieving analytics. A Dockerfile is included for containerized deployment. Future improvements could include real-time notifications, a more accessible user interface, and multi-language support.

For technical issues or questions, users can use the contact page or reach out directly to the development team. This documentation provides a comprehensive guide for users and administrators to effectively utilize the “Walk With Me” web app.



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

