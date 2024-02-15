# Vikings Club Website App

This repository contains the code for the Vikings Club website app. The app is designed to facilitate communication and automation within the swimming club. It includes features for managing pool activities, client registration, workout planning, and more.

## TODO

- [x] Design the user interface and user experience for the website app
- [x] Implement the database architecture for storing user data
- [ ] Complete the frontend development, including adding the dashboard
- [ ] Complete the backend development, including implementing security measures
- [ ] Test the web app on different devices and screen sizes
- [ ] Optimize the app for performance and responsiveness
- [ ] Deploy the app to a web hosting service

## Database Architecture

The database schema has been created to store user data. It includes tables for managing managers, coaches, clients, and their related parameters. The schema also supports communication between different entities and allows for group-based assignments.

## Main Entities

- **Manager**: Responsible for managing the swimming club.
- **Coach**: Responsible for coaching the clients.
- **Client**: Includes different types of clients, such as athletes, recreational swimmers, and swimming school participants. Each client belongs to a specific group and has a group color.

## Parameters

- **Manager**: Plans pool activities, including availability, coaching sessions, minibus usage, and client activities.
- **Club Plan Visualization**: Provides a visual representation of the club's plans.
- **Client**: Includes parameters such as reinscription date and plan changes.
- **Coach**: Manages client scheduling in events, workout planning, and intern responsibilities.
- **Communication**: Enables chat communication between coaches and clients, managers and coaches, and manager to client.
- **Group-defined client => coach assignment by manager**: The manager assigns coaches to clients based on their group.
- **Manager-defined pool availability**: The manager defines pool availability and lanes in each pool.
- **Automatic group assignment**: Every client is automatically assigned to a group upon registration.
- **Minimum session duration**: Each session has a minimum duration of 30 minutes, with an additional 15 minutes per slide.

## Next Steps

- Complete the frontend development by adding the dashboard and ensuring a seamless user experience.
- Complete the backend development by implementing security measures to protect user data.
- Test the web app on different devices and screen sizes to ensure compatibility.
- Optimize the app for performance and responsiveness to provide a smooth user experience.
- Deploy the app to a web hosting service to make it accessible to users.

Please note that this README is a work in progress and will be updated as the development progresses.
