---
statblock: true
name: 'Cambion - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Fiend
cr: 5
ac: 16
hp: 93
hit_dice: '11d8 + 44'
speed: '30 ft., fly 60 ft.'
stats:
    - 18
    - 18
    - 18
    - 16
    - 14
    - 18
damage_resistances: 'cold, fire, poison; damage from nonmagical weapons'
saves:
    constitution: 7
    intelligence: 6
    wisdom: 5
    charisma: 7
skillsaves:
    deception: 7
    intimidation: 7
    perception: 5
    stealth: 7
senses: 'darkvision 60 ft., passive Perception 15'
languages: 'Abyssal, Common, Infernal'
actions:
    - { name: Multiattack, desc: 'The cambion makes two melee attacks or two ranged attacks.' }
    - { name: 'Black Iron Blade', desc: 'Melee Weapon Attack: +7 to hit, reach 10 ft., one target. Hit: 9 (1d10 + 4) slashing damage, and the target takes a wound that deals 5 (1d10) ongoing slashing damage. A creature can end the ongoing damage by staunching the wound as an action or by giving the target magical healing.' }
    - { name: 'Fire Blast', desc: 'Ranged Spell Attack: +7 to hit, range 60 ft., one target. Hit: 13 (3d8) fire damage.' }
    - { name: 'Fiery Escape (1/Day)', desc: "The cambion magically creates a fiery portal to the realm of its fiendish parent. The portal appears in an empty space within 5 feet. The portal lasts until the end of the cambion's next turn or until it passes through the portal. No one but the cambion can pass through the portal; anyone else that enters its space takes 14 (4d6) fire damage." }
'bonus actions':
    - { name: 'Fell Charm', desc: "The cambion targets one creature within 30 feet. The target makes a DC 15 Wisdom saving throw. On a failure, it is magically charmed by the cambion for 1 day. The effect ends if the cambion or a cambion's ally harms the target, or if the cambion commands it to take a suicidal action. While charmed, the target regards the cambion as a trusted friend and is an ally of the cambion. If the target makes a successful saving throw or the effect ends, the target is immune to this cambion's Fell Charm for 24 hours." }
    - { name: Command, desc: "The cambion gives an order to an ally within 60 feet that can hear it. If the ally has a reaction available, it can use it to follow the cambion's order, either taking an action or moving up to its Speed." }
    - { name: Shapeshift, desc: "The cambion magically changes its form to that of any humanoid creature it has seen before, or back into its true form. While shapeshifted, its statistics are unchanged except that it has no armor or equipment, can't use its black iron blade, and can fly only if it is in a form with wings. It reverts to its true form if it dies." }
combat:
    - { name: 'The cambion prefers to stay out of melee range, attacking with its fire blast and using Fell Charm on its first turn', desc: 'It uses Command when it has an ally or charmed victim in position to harm one of its foes. If its allies fail it, it wades into battle using its black iron blade, attacking multiple targets to inflict ongoing wounds on as many foes as possible. When reduced to 30 hit points or fewer, it flies away, promising revenge. It uses Fiery Escape only as a last resort.' }

---
```statblock
monster: Cambion - A5E
```
