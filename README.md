## TODO vikings project

- [ ] Design the user interface for the mobile app
- [ ] Implement user authentication and registration functionality
- [x] Create a database schema for storing user data
- [ ] Develop the functionality to add, edit, and delete tasks
- [ ] Implement task filtering and sorting options
- [ ] Add notifications for task reminders
- [ ] Test the app on different mobile devices and screen sizes
- [ ] Optimize the app for performance and responsiveness
- [ ] Deploy the app to a mobile app store / play store / club host service




# DB DEFINE


# Objective: Facilitate Communication and Automation

## Entities

- **Manager**: Responsible for managing the swimming club.
- **Coach**: Responsible for coaching the clients.
- **Client**: Includes different types of clients, such as athletes, recreational swimmers, and swimming school participants. Each client belongs to a specific group and has a group color.

## Parameters

### Client (defined by group)

- **Manager**: Plans pool activities, including:
        - Availability: Specifies the time, lane, and group (coach) availability.
        - Coaching sessions: Defines sessions based on the coach, group of clients, and workout plan.
        - Minibus usage: Plans the availability of minibus for transportation to events.
        - Client activities: Handles client registration, group assignment, and event scheduling.

- **Club Plan Visualization**: Provides a visual representation of the club's plans.

- **Client**:
        - Reinscription date: Specifies the date for client re-registration.
        - Plan changes: Alerts clients about any changes in their plans.

- **Coach**:
        - Client scheduling in events: Manages the scheduling of clients for events.
        - Workout planning: Plans workouts for clients.
        - Intern responsibility: Assigns responsibilities to interns.

- **Communication**:
        - Between coach and client: Enables chat communication between coaches and clients.
        - Between manager and coach: Enables chat communication between managers and coaches.
        - Manager to client: Sends informative messages from the manager to clients.

- Group-defined client => coach assignment by manager: The manager assigns coaches to clients based on their group.

- Manager defines pool availability and lanes in each pool.
- Each pool has 1 to n lanes.
- Every client is automatically assigned to a group upon registration.
- Minimum session duration is 30 minutes, with an additional 15 minutes per slide.

