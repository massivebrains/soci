function fizz_buzz(min, max) {

    for (let i = min; i <= max; i++) {

        if (i % 3 == 0 && i % 5 == 0) {
            console.log('FizzBuzz')
        } else if (i % 3 == 0) {
            console.log('Fizz')
        } else if (i % 5 == 0) {
            console.log('Buzz')
        } else {
            console.log(i);
        }

    }
}

fizz_buzz(1, 100)