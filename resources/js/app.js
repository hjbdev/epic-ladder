import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {

    const teamCells = Array.from(document.querySelectorAll('.team-cell'));

    teamCells.forEach(() => {
        console.log('test');
        document.addEventListener('mouseover', (e) => {
            teamCells.forEach((cell) => {
                if (cell.innerText == e.target.innerText) {
                    cell.classList.add('font-bold', 'bg-orange-200', 'dark:bg-orange-800');
                }
            })
        });
        document.addEventListener('mouseout', (e) => {
            teamCells.forEach((cell) => {
                if (cell.innerText == e.target.innerText) {
                    cell.classList.remove('font-bold', 'bg-orange-200', 'dark:bg-orange-800');
                }
            })
        });
    })
})
