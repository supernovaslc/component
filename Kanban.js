let cardsList = [
    {
        id: 1,
        titles: "Cần làm",
        status: "todo",
        tasks: [
            {
                id: 1,
                name: "Tư duy lập trình",
                done: false
            }
        ]
    },
    {
        id: 2,
        titles: "Đang làm",
        status: "in-progress",
        tasks: [
            {
                id: 1,
                name: "Luyện tập Component",
                link: "#",
                done: true
            },
            {
                id: 2,
                name: "Tìm hiểu về quảng cáo facebook",
                link: "#",
                done: false
            },
        ]
    },
    {
        id: 3,
        titles: "Đã xong",
        status: "done",
        tasks: [
            {
                id: 1,
                name: "Tư duy lập trình",
                done: false
            }
        ]
    },
];

class Task extends React.Component{
    render() {
        const task = this.props.tasks.map((task) =>{
            if(this.done){
                return(
                    <div key={task.id}>
                        <a href={task.link}>
                            <span>{task.name}</span>
                        </a>
                    </div>
                )
           }
        });
        return (
            <div>
                {task}
            </div>
        )
    }
}

class Card extends React.Component{
    render() {
        return (
            <div>
                <h3>{this.props.title}</h3>
                <Task tasks={this.props.tasks} />
                <div className="card-composer">
                    <a className="open-card-composer card-templates-enabled" href="#">
                        <span className="icon-sm icon-add"></span>
                        <span className="js-add-a-card hide">Thêm thẻ</span>
                        {/* <span className="js-add-another-card">Thêm thẻ khác</span> */}
                    </a>
                </div>
            </div>
        )
    }
}

class List extends React.Component{
    render() {
        const list = this.props.cards.map((card) =>{
            return <Card key={card.id}
                         title={card.titles} 
                         tasks={card.tasks}
                     />
        });
        return (
            <div>
                {list}
            </div>
        )
    }
} 

class KanbanBoard extends React.Component{
    render() {
        return (
            <div>
               <List cards={this.props.cards.filter((card) => card.status === "todo")} /> 
               <List cards={this.props.cards.filter((card) => card.status === "in-progress")} /> 
               <List cards={this.props.cards.filter((card) => card.status === "done")} /> 
            </div>
        )
    }
}

ReactDOM.render(
    <KanbanBoard cards={cardsList} />,
    document.getElementById('root')
)