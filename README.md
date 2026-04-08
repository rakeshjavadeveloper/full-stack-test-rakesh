Q)How long did you spend on the coding test? 
a) i have spennt arround 2hrs in this task

Q)What would you add to your solution if you had more time? If you didn't spend much time on the coding test then use this as an opportunity to explain what you would add.
a)
*I would implement database migrations and seeders to automate the database setup process. This would eliminate the need for manual import/export and make the project more portable and production-ready.
*I would introduce RBAC to manage user permissions effectively. Based on user roles (e.g., admin, editor, viewer), access to actions like create, update, and delete would be restricted, improving both security and scalability.
*I would implement soft delete functionality to prevent permanent data loss. This allows records to be restored if needed and helps in maintaining data integrity.
*Adding proper request validation and structured error responses would make it more robust and reliable.

Q)How would you track down a performance issue in production? Have you ever had to do this?
a)When facing a performance issue, I follow a systematic approach:

Identify the bottleneck
First, I check whether the issue is coming from the database, backend code, external APIs, or frontend by analyzing response times and logs.
Analyze Logs & Monitoring Tools
I review application logs and server logs. If available, I use monitoring tools like New Relic or Datadog to identify slow transactions and error spikes.
Database Query Optimization
I check for slow queries using query logs or tools like EXPLAIN, and optimize them by adding indexes, reducing joins, or caching frequent queries if there n+1 problem then remove it using joins or subquery.
Check API & External Dependencies
If the system depends on third-party APIs, I verify their response times and add timeouts or retries if needed.
Code Profiling & Debugging
I profile the application to find inefficient code paths, unnecessary loops, or memory-heavy operations.
Caching Strategy
I introduce caching (e.g., Redis) for frequently accessed data to reduce load on the database.
Load & Stress Testing
If needed, I simulate traffic to reproduce the issue and validate fixes.


Q)Please describe yourself using JSON.
a)
{
  "name": "Rakesh",
  "role": "Backend Developer",
  "experience_years": 6,
  "primary_skills": ["PHP", "Laravel", "Node.js", "MySQL", "JavaScript"],
  "secondary_skills": ["React", "REST APIs", "Git"],
  "strengths": [
    "Problem solving",
    "Writing clean and maintainable code",
    "Debugging and performance optimization",
    "Understanding real-world business requirements"
  ],
  "goals": {
    "short_term": "Strengthen backend and system design expertise",
    "long_term": "Work on large-scale, high-performance systems"
  }
}


>>>>also you can improt the database to verify