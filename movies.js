let movies = [
    {
        "page": 1,
        "totalPages": 5,
        "data": [
            {
                "title": "Movie 1",
                "rating": 4.7
            },
            {
                "title": "Movie 2",
                "rating": 7.8
            }
        ]
    },
    {
        "page": 2,
        "totalPages": 5,
        "data": [
            {
                "title": "Movie 3",
                "rating": 5.1
            },
            {
                "title": "Movie 4",
                "rating": 2.4
            }
        ]
    }
]

let sum = 0;
let count = 0;
let max = 0;

for (let row of movies) {

    row.data.forEach(movie => {
        if (movie.rating > max)
            max = movie.rating;

        sum += movie.rating;
        count++;
    })
}

console.log({ 'maximum_rating': max, 'average_rating': sum / count })