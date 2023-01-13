---
statblock: true
name: 'Faerie Eater Troll - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Giant
cr: 6
ac: 15
hp: 84
hit_dice: '8d10 + 40'
speed: '40 ft.'
stats:
    - 18
    - 12
    - 20
    - 8
    - 12
    - 8
skillsaves:
    stealth: 4
senses: 'darkvision 60 ft., passive Perception 11'
languages: Giant
traits:
    - { name: 'Keen Smell', desc: 'The troll has advantage on Perception checks that rely on smell.' }
    - { name: 'Magic Resistance', desc: 'The troll has advantage on saving throws against spells and other magical effects.' }
    - { name: Regeneration, desc: "The troll regains 10 hit points at the start of its turn. If the troll takes acid or fire damage, this trait doesn't function on its next turn. The troll dies only if it starts its turn with 0 hit points and doesn't regenerate." }
    - { name: 'Severed Limbs', desc: "If the troll is dealt a critical hit with a slashing weapon, one of its extremities is severed. The extremity has AC 15, 10 hit points, a Speed of 10, and the troll's Regeneration trait. The troll controls the severed extremity and perceives through it with the appropriate senses (for instance, it sees through the eyes of its severed head). As a bonus action, the troll can reattach the extremity. While the troll is missing the extremity, its maximum hit points are reduced by 10. Roll d6 to determine the severed extremity:" }
    - { name: '1-4: Arm', desc: 'If the troll has an arm, it loses an arm. It loses one of its claw attacks, and the severed arm can make a claw attack.' }
    - { name: '5-6: Head', desc: 'If the troll has a head, it loses its head. It loses its bite attack, and the severed head can make a bite attack.' }
actions:
    - { name: Multiattack, desc: 'The troll attacks with its bite and twice with its claw. When the troll uses Multiattack, it can use Charming Murmur in place of its bite.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 11 (2d6 + 4) piercing damage.' }
    - { name: Claw, desc: 'Melee Weapon Attack: +7 to hit, reach 10 ft., one target. Hit: 9 (2d4 + 4) slashing damage.' }
    - { name: 'Charming Murmur', desc: 'One creature within 60 feet that can hear the troll makes a DC 12 Charisma saving throw. On a failure, it is charmed for 1 minute. While charmed, its Speed is 0. The creature repeats the saving throw whenever it takes damage.' }
combat:
    - { name: 'The troll ambushes prey and attacks the closest or slowest opponent, ignoring all damage except fire and acid', desc: "It flees only if it's bloodied, it has taken acid or fire damage, and none of its enemies are down." }

---
```statblock
monster: Faerie Eater Troll - A5E
```
