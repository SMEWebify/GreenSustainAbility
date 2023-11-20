
<p align="center">
  <img src="https://user-images.githubusercontent.com/75578469/218315331-7c204c59-d076-4fd5-9bc9-5dc8803dbac9.PNG">
</p>

GreenSustainAbility is an advanced online solution for environmental management. This intuitive and user-friendly app helps you monitor and improve your environmental performance by following ISO 14001 standards. With GreenSustainAbility, you can track environmental incidents, key indicators, environmental audits, emissions data and carbon footprint. Join the community of environmentally conscious companies now and improve your performance with GreenSustainAbility!

## Installation

Clone the repository to your local machine.:
```bash
git clone https://github.com/billyboy35/GreenSustainAbility.git
```
Navigate into the project directory:
```bash
cd repository
```
Install the required dependencies using Composer:
```bash
composer install
```

Create a new MySQL database for the application and run migration
```bash
php artisan migrate
```

Rename the .env.example file to .env and update the database configuration variables.


Generate a new application key:
```bash
php artisan key:generate
```

Start the application:
```bash
php artisan serve
```

Access the application in your web browser at http://localhost:8000.


## Usage
The Environmental Audit Management System allows users to schedule audits, record audit data, track recommended actions, and report on environmental performance.

System features include:

- Dashboard
![image](https://github.com/SMEWebify/GreenSustainAbility/assets/75578469/7ae316e7-124e-4274-911b-2359d3d1d644)

- Environmental Incident Management: To track and manage environmental incidents, their root causes, and corrective actions.
![image](https://user-images.githubusercontent.com/75578469/227654532-ab4d6c7b-3fc5-4d17-ab2d-83901be6414c.png)

- Environmental Indicator Monitoring: To monitor and manage environmental indicators, such as energy consumption, greenhouse gas emissions, water discharge, waste, etc.
![image](https://user-images.githubusercontent.com/75578469/228966359-3bc33e04-8842-4b7f-9736-9b57ed0fd657.png)

- Environmental Audit Management: To manage environmental audits, their schedule, data recording, and analysis.
![image](https://user-images.githubusercontent.com/75578469/229923201-37833d25-6d64-4857-a49e-eb02b1cc1dc6.png)


- Emissions Data Management: To manage emissions data, such as emission type, source, location, amount, date, etc.
- Carbon Footprint Calculation: To calculate and manage carbon footprint data, including emissions, reductions, and targets.
![image](https://user-images.githubusercontent.com/75578469/232337810-513fe3c8-f6fe-4f98-a3a9-0b40739b6f33.png)


Each tool provides a set of functionalities to manage the data related to its theme, including data entry, editing, and reporting.


## Contributing
Contributions are welcome! If you find a bug or have a feature request, please open a new issue. If you want to contribute code, please fork the repository and submit a pull request.


## License
This application is open-sourced software licensed under the [MIT license](https://github.com/billyboy35/GreenSustainAbility/blob/main/LICENCE.md).
