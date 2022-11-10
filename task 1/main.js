// let towersHeight = [4, 4, 1, 3];

function countTallestTowers(height) {
    let count = 0;
    let maxValue = Math.max(...height);
    for (let i = 0; i < height.length; i++){
        if (maxValue == height[i]) {
            ++count;
        }
    }
    return count;
}

console.log(maxiMumHeight([4, 4, 1, 3]))