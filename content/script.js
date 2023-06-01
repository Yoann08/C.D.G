// create an array of objects with the id, trigger element (eg. button), and the content element
const tabElements = [
    {
        id: 'apprenants',
        triggerEl: document.querySelector('#apprenants'),
        targetEl: document.querySelector('#apprenants-tab')
    },
    {
        id: 'publications-tab',
        triggerEl: document.querySelector('#publications-tab-example'),
        targetEl: document.querySelector('#publications-example')
    },
];

// options with default values
const options = {
    defaultTabId: 'apprenants',
    activeClasses: 'text-red-light hover:text-purple-light border-blue-600',
    inactiveClasses: 'text-purple-light hover:text-white border-gray-100 hover:border-gray-300',
    onShow: () => {
        console.log('tab is shown');
    }
};