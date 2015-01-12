# A Symfony XML Reading Web App #
This was an technical assignment that I had to create to prove my expertise in Symfony2

Due to time constraints and working 9-6 I've kept the project simple. The best thing that this project should show is my Object Oriented Skills.
Installation:
Run: git clone https://github.com/sohrabkhan/SymfonyXmlReader.git
Then: php composer.phar update

To get all the events: http://localhost/SquawkaTech/web/api/v1/events
To get one event if given team names: http://localhost/SquawkaTech/web/api/v1/team=Chelsea
To get the total no of goals that want to see for a particular team: http://localhost/SquawkaTech/web/api/v1/team=Chelsea

### Framework ###
The project has been done in Symfony 2.0
Why? The job specs require a symfony developer and since it's the robust and complete framework and I'm also very fluent with it, so I chose to use Symfony2. I could have used plain PHP but because Symfony is MV and makes life easier that is why I chose Symfony.

### DBMS: ###
I haven't used any DBMS like mongodb or MySQL because of the scope of the project.

### Structure ###
The application conforms to SOLID and DRY principles. Entities have been created and other helper classes and controller classes have been made that hasn't go any dependency.
