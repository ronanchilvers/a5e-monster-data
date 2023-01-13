---
statblock: true
name: 'Ascetic Grandmaster - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 14
ac: 20
hp: 172
hit_dice: '23d8 + 69'
speed: '60 ft., climb 60 ft.'
stats:
    - 16
    - 20
    - 16
    - 10
    - 20
    - 10
damage_resistances: 'damage from nonmagical weapons'
condition_immunities: 'charmed, frightened, poisoned'
saves:
    - { strength: 8 }
    - { dexterity: 10 }
    - { constitution: 8 }
    - { intelligence: 5 }
    - { wisdom: 10 }
    - { charisma: 5 }
skillsaves:
    - { acrobatics: 10 }
    - { athletics: 8 }
    - { perception: 10 }
    - { stealth: 10 }
senses: 'passive Perception 22'
languages: 'any one'
traits:
    - { name: Athlete, desc: 'The grandmaster only uses 5 feet of movement when standing from prone and can make a running jump after moving only 5 feet rather than 10.' }
    - { name: Evasion, desc: 'When the grandmaster makes a Dexterity saving throw against an effect that deals half damage on a success, they take no damage on a success and half damage on a failure.' }
    - { name: 'Magic Resistance', desc: 'The grandmaster has advantage on saving throws against spells and magical effects.' }
    - { name: Mobile, desc: 'After the grandmaster makes a melee attack against a creature on their turn, until the end of their turn they do not provoke opportunity attacks from that creature.' }
    - { name: Reactive, desc: "The grandmaster can take a reaction on each creature's turn." }
    - { name: 'Stunning Strike (1/Turn)', desc: "When the grandmaster hits a creature with a melee attack, they can force it to make a DC 18 Constitution saving throw. On a failure, it is stunned until the end of the grandmaster's next turn." }
    - { name: 'Unarmored Defense', desc: "The grandmaster's AC equals 10 + their Dexterity modifier + their Wisdom modifier." }
actions:
    - { name: Multiattack, desc: 'The grandmaster attacks six times.' }
    - { name: 'Unarmed Strike', desc: 'Melee Weapon Attack: +10 to hit, reach 5 ft., one target. Hit: 10 (1d10 + 5) bludgeoning damage.' }
reactions:
    - { name: 'Deft Dodge (1/Round)', desc: "When an attacker that the grandmaster can see hits them with an attack, the grandmaster halves the attack's damage against them." }
    - { name: 'Ascetic grandmasters lead the finest monasteries in the world or travel alone seeking worthy challenges and students', desc: 'They often appear unassuming, but challenging the speed and strength of these legendary martial artists is akin to challenging a hurricane.' }
'bonus actions':
    - { name: 'Trained Dash', desc: 'The grandmaster takes the Dash action.' }

---
```statblock
monster: Ascetic Grandmaster - A5E
```
