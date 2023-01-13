---
statblock: true
name: 'Malcubus - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Fiend
cr: 4
ac: 14
hp: 78
hit_dice: '12d8 + 24'
speed: '30 ft., fly 60 ft. (true form only)'
stats:
    - 10
    - 16
    - 14
    - 14
    - 16
    - 20
damage_resistances: 'cold, fire, lightning, poison; damage from nonmagical weapons'
skillsaves:
    - { deception: 7 }
    - { insight: 5 }
    - { perception: 5 }
    - { persuasion: 7 }
    - { stealth: 5 }
senses: 'darkvision 60 ft., passive Perception 15'
languages: 'Abyssal, Common, Infernal, telepathy 60 ft.'
traits:
    - { name: 'Cloaked Mind', desc: "When subjected to a divination effect that detects fiends or alignment, the malcubus makes a DC 15 Charisma saving throw. On a success, the malcubus's nature is not detected." }
    - { name: Evil, desc: 'The malcubus radiates an Evil aura.' }
    - { name: 'Telepathic Bond', desc: 'The malcubus can communicate telepathically with a charmed creature over any distance, even on a different plane of existence.' }
actions:
    - { name: 'Claw (Malcubus Form Only)', desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 6 (1d6 + 3) slashing damage plus 7 (2d6) necrotic damage.' }
    - { name: Charm, desc: "The malcubus targets one humanoid on the same plane of existence within 30 feet, forcing it to make a DC 15 Wisdom saving throw. On a failure, the target is magically charmed for 1 day or until the malcubus charms another creature. The charmed creature obeys the malcubus's commands. The creature repeats the saving throw whenever it takes damage or if it receives a suicidal command. If a creature's saving throw is successful or the effect ends for it, it is immune to any malcubus's Charm for 24 hours." }
    - { name: 'Draining Kiss', desc: "The malcubus kisses a willing or charmed creature. The target makes a DC 15 Constitution saving throw, taking 22 (4d10) psychic damage on a failed save or half damage on a success. The target's hit point maximum is reduced by the same amount until it finishes a long rest, and the malcubus regains hit points equal to the same amount. If the target is charmed by the malcubus, the charm ends." }
    - { name: Etherealness, desc: 'The malcubus magically travels to the Ethereal Plane. While on the Ethereal Plane, the malcubus can see and hear into the Material Plane and can choose to make itself audible and hazily visible to creatures on the Material Plane. If a humanoid on the Material Plane invites the malcubus to do so, the malcubus can use an action to magically travel from the Ethereal Plane to the Material Plane.' }
    - { name: 'Dream (1/Day)', desc: "While on the Ethereal Plane, the malcubus magically touches a sleeping humanoid that is not protected by a magic circle or protection from evil and good spell or similar magic. While the touch persists, the malcubus appears in the creature's dreams. The creature can end the dream at any time. If the dream lasts for 1 hour, the target gains no benefit from the rest, and the malcubus can use Charm on the creature even if it's on a different plane of existence." }
reactions:
    - { name: 'Living Shield', desc: 'When a creature the malcubus can see hits it with an attack, the malcubus can give an order to a creature charmed by it within 5 feet. The charmed creature uses its reaction, if available, to swap places with the malcubus. The attack hits the charmed creature instead of the malcubus.' }
'bonus actions':
    - { name: Shapeshift, desc: 'The malcubus magically changes its form to a Medium or Small humanoid or into its true form. It can fly only in its true form. While shapeshifted, its statistics are unchanged except for its size and speed. Its equipment is not transformed. It reverts to its true form if it dies.' }
combat:
    - { name: 'The malcubus tries to avoid combat', desc: "When it can't, it charms an opponent, giving orders to it and using it as a living shield. Once it has charmed a creature, it uses its claws. When bloodied, it uses Charming Kiss. It flees to the Ethereal Plane only in dire straits, since it may have difficulty returning." }

---
```statblock
monster: Malcubus - A5E
```
