# php_fizzy_buzz

## Plan:

The plan is to have a laravel  server hosted in heroku to supply the data for the fizz/buzz wind turbine data, and a front end in react or angular (undecided right now) to pull in that data and load it. I'm making the assumption that as an ajax call is requested that the processing could take some time. So two end points are to be created one to create the response payload of numbers 1-x for the initial dataset, and a second to provide the processed data.

`/api/dataset` Will provide the base data.
`/api/dataset/processed` Will provide the analysed data.

The idea is to allow passing an integer for the size of data set. Allowing for updated data in the event that a second "scan" was carried out and more data points.

